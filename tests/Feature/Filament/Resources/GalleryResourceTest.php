<?php

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Filament\Admin\Resources\Galleries\Pages\CreateGallery;
use App\Filament\Admin\Resources\Galleries\Pages\EditGallery;
use App\Filament\Admin\Resources\Galleries\Pages\ListGalleries;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

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

    livewire(CreateGallery::class)
        ->fillForm([
            'gallery_category_id' => $category->id,
            'title' => $newData->title,
            'date' => $newData->date->format('Y-m-d'),
            'is_publish' => $newData->is_publish,
            'featured_image' => UploadedFile::fake()->image('featured_image.jpg'),
            'images' => [
                UploadedFile::fake()->image('image1.jpg'),
                UploadedFile::fake()->image('image2.jpg'),
            ],
        ])
        ->call('create')
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

    livewire(EditGallery::class, [
        'record' => $gallery->getRouteKey(),
    ])
        ->fillForm([
            'title' => $newData->title,
            'featured_image' => UploadedFile::fake()->image('new_featured_image.jpg'),
            'images' => [UploadedFile::fake()->image('new_image.jpg')],
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($gallery->refresh()->title)->toBe($newData->title);
});

test('can delete gallery', function () {
    $gallery = Gallery::factory()->create();

    livewire(EditGallery::class, ['record' => $gallery->getRouteKey()])
        ->callAction(DeleteAction::class);

    $this->assertModelMissing($gallery);
});
