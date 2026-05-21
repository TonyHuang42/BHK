<?php

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Filament\Admin\Resources\Galleries\Pages\CreateGallery;
use App\Filament\Admin\Resources\Galleries\Pages\EditGallery;
use App\Filament\Admin\Resources\Galleries\Pages\ListGalleries;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Testing\TestAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

// use function Pest\Livewire\livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
    Storage::fake('public');
});

test('can list galleries', function () {
    $galleries = Gallery::factory()->count(5)->create();

    livewire(ListGalleries::class)
        ->assertCanSeeTableRecords($galleries)
        ->assertSuccessful();
});

test('can render create page', function () {
    $this->get(GalleryResource::getUrl('create'))->assertSuccessful();
});

test('can create gallery', function () {
    $category = GalleryCategory::factory()->create();
    $newData = Gallery::factory()->make();

    // Single FileUpload inside a Repeater requires the state to be set in Filament's
    // UUID-keyed format via ->set() rather than via fillForm(), because Livewire's
    // upload mechanism does not apply the FileUploadStateCast for nested fields.
    // We also replace data.images entirely to avoid the Repeater's default empty item.
    $repeaterKey = (string) Str::uuid();
    $fileKey = (string) Str::uuid();

    $component = livewire(CreateGallery::class)
        ->fillForm([
            'gallery_category_id' => $category->id,
            'title' => $newData->title,
            'date' => $newData->date->format('Y-m-d'),
            'is_publish' => $newData->is_publish,
            'featured_image' => UploadedFile::fake()->image('featured.jpg'),
        ]);

    $component->set('data.images', [
        $repeaterKey => [
            'path' => [$fileKey => 'galleries/test-image.jpg'],
            'caption' => 'First image',
        ],
    ]);

    $component->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $this->assertDatabaseHas('galleries', [
        'title' => $newData->title,
        'gallery_category_id' => $category->id,
    ]);
});

test('cannot create gallery without category', function () {
    livewire(CreateGallery::class)
        ->fillForm(['gallery_category_id' => null])
        ->call('create')
        ->assertHasFormErrors(['gallery_category_id' => 'required']);
});

test('cannot create gallery with missing required fields', function () {
    livewire(CreateGallery::class)
        ->fillForm([
            'title' => null,
            'date' => null,
            'featured_image' => null,
            'images' => null,
        ])
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'required',
            'date' => 'required',
            'featured_image' => 'required',
            'images' => 'required',
        ]);
});

test('cannot create gallery with duplicate title', function () {
    $existing = Gallery::factory()->create();

    livewire(CreateGallery::class)
        ->fillForm([
            'title' => $existing->title,
        ])
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'unique',
        ]);
});

test('generates slug from title', function () {
    livewire(CreateGallery::class)
        ->fillForm([
            'title' => 'Test Gallery',
        ])
        ->assertFormSet([
            'slug' => 'test-gallery',
        ]);
});

test('can render edit page', function () {
    $gallery = Gallery::factory()->create();

    $this->get(GalleryResource::getUrl('edit', ['record' => $gallery]))->assertSuccessful();
});

test('can update gallery', function () {
    $gallery = Gallery::factory()->create();
    $newData = Gallery::factory()->make();

    $imageItemKey = (string) Str::uuid();
    $imageFileKey = (string) Str::uuid();

    $component = livewire(EditGallery::class, ['record' => $gallery->getRouteKey()])
        ->fillForm([
            'title' => $newData->title,
            'featured_image' => UploadedFile::fake()->image('new_featured.jpg'),
        ]);

    // Replace images entirely to avoid conflicts with factory-loaded state.
    // Paths are set in Filament's UUID-keyed array format since Livewire's upload()
    // does not apply FileUploadStateCast for nested Repeater fields.
    $component->set('data.images', [
        $imageItemKey => [
            'path' => [$imageFileKey => 'galleries/updated-image.jpg'],
            'caption' => 'Updated caption',
        ],
    ]);

    $component->call('save')
        ->assertHasNoFormErrors();

    expect($gallery->refresh()->title)->toBe($newData->title);
});

test('can delete gallery', function () {
    $gallery = Gallery::factory()->create();

    livewire(EditGallery::class, ['record' => $gallery->getRouteKey()])
        ->callAction(DeleteAction::class);

    $this->assertModelMissing($gallery);
});

test('can search galleries by title', function () {
    $galleries = Gallery::factory()->count(3)->create();
    $target = $galleries->first();

    livewire(ListGalleries::class)
        ->searchTable($target->title)
        ->assertCanSeeTableRecords([$target])
        ->assertCanNotSeeTableRecords($galleries->skip(1));
});

test('can search galleries by category name', function () {
    $category = GalleryCategory::factory()->create(['name' => 'Unique Architecture XYZ']);
    $gallery = Gallery::factory()->create(['gallery_category_id' => $category->id]);
    $others = Gallery::factory()->count(2)->create();

    livewire(ListGalleries::class)
        ->searchTable('Unique Architecture XYZ')
        ->assertCanSeeTableRecords([$gallery])
        ->assertCanNotSeeTableRecords($others);
});

test('can sort galleries by date descending', function () {
    $older = Gallery::factory()->create(['date' => '2023-01-01']);
    $newer = Gallery::factory()->create(['date' => '2024-12-31']);

    livewire(ListGalleries::class)
        ->sortTable('date', 'desc')
        ->assertCanSeeTableRecords([$newer, $older], inOrder: true);
});

test('can bulk delete galleries', function () {
    $galleries = Gallery::factory()->count(3)->create();

    livewire(ListGalleries::class)
        ->selectTableRecords($galleries->pluck('id')->toArray())
        ->callAction(TestAction::make(DeleteBulkAction::class)->table()->bulk());

    foreach ($galleries as $gallery) {
        $this->assertModelMissing($gallery);
    }
});

test('cannot create gallery with title exceeding 255 characters', function () {
    livewire(CreateGallery::class)
        ->fillForm(['title' => str_repeat('a', 256)])
        ->call('create')
        ->assertHasFormErrors(['title' => 'max']);
});

test('can update gallery with its own existing title', function () {
    $gallery = Gallery::factory()->create();
    $imageItemKey = (string) Str::uuid();
    $imageFileKey = (string) Str::uuid();

    $component = livewire(EditGallery::class, ['record' => $gallery->getRouteKey()])
        ->fillForm([
            'title' => $gallery->title,
            'featured_image' => UploadedFile::fake()->image('featured.jpg'),
        ]);

    $component->set('data.images', [
        $imageItemKey => [
            'path' => [$imageFileKey => 'galleries/test-image.jpg'],
            'caption' => 'Test',
        ],
    ]);

    $component->call('save')
        ->assertHasNoFormErrors(['title']);
});

test('edit page pre-fills form with existing gallery data', function () {
    $gallery = Gallery::factory()->create();

    livewire(EditGallery::class, ['record' => $gallery->getRouteKey()])
        ->assertFormSet([
            'title' => $gallery->title,
            'gallery_category_id' => $gallery->gallery_category_id,
            'is_publish' => $gallery->is_publish,
            'date' => $gallery->date->format('Y-m-d'),
        ]);
});
