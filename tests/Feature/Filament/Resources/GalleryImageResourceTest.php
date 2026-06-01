<?php

use App\Filament\Admin\Resources\GalleryImages\GalleryImageResource;
use App\Filament\Admin\Resources\GalleryImages\Pages\CreateGalleryImage;
use App\Filament\Admin\Resources\GalleryImages\Pages\EditGalleryImage;
use App\Filament\Admin\Resources\GalleryImages\Pages\ListGalleryImages;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
    Storage::fake('public');
});

test('can list gallery images', function () {
    $images = GalleryImage::factory()->count(3)->create();

    livewire(ListGalleryImages::class)
        ->assertCanSeeTableRecords($images)
        ->assertSuccessful();
});

test('can reorder gallery images', function () {
    $images = GalleryImage::factory()->count(3)->create();

    livewire(ListGalleryImages::class)
        ->call('reorderTable', [
            $images[2]->getKey(),
            $images[0]->getKey(),
            $images[1]->getKey(),
        ]);

    expect($images[2]->refresh()->sort_order)->toBe(1);
    expect($images[0]->refresh()->sort_order)->toBe(2);
    expect($images[1]->refresh()->sort_order)->toBe(3);
});

test('can render create page', function () {
    $this->get(GalleryImageResource::getUrl('create'))->assertSuccessful();
});

test('can create a gallery image and generate its thumbnail', function () {
    $category = GalleryImageCategory::factory()->create();

    livewire(CreateGalleryImage::class)
        ->fillForm([
            'image_url' => UploadedFile::fake()->image('photo.jpg', 800, 600),
            'caption' => 'A historic photo',
            'categories' => [$category->id],
            'is_publish' => true,
        ])
        ->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $image = GalleryImage::first();

    expect($image)->not->toBeNull();
    expect($image->image_url)->toStartWith('galleries/images/');
    expect($image->thumbnail_url)->toStartWith('galleries/thumbnails/');
    Storage::disk('public')->assertExists($image->image_url);
    Storage::disk('public')->assertExists($image->thumbnail_url);
});

test('can assign categories when creating a gallery image', function () {
    $category = GalleryImageCategory::factory()->create();

    livewire(CreateGalleryImage::class)
        ->fillForm([
            'image_url' => UploadedFile::fake()->image('photo.jpg'),
            'categories' => [$category->id],
            'is_publish' => true,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $image = GalleryImage::first();

    $this->assertDatabaseHas('gallery_image_has_categories', [
        'gallery_image_id' => $image->id,
        'gallery_image_category_id' => $category->id,
    ]);
});

test('cannot create a gallery image without an image', function () {
    livewire(CreateGalleryImage::class)
        ->fillForm([
            'image_url' => null,
        ])
        ->call('create')
        ->assertHasFormErrors(['image_url' => 'required']);
});

test('can render edit page', function () {
    $image = GalleryImage::factory()->create();

    $this->get(GalleryImageResource::getUrl('edit', ['record' => $image]))->assertSuccessful();
});

test('can update a gallery image caption', function () {
    $image = GalleryImage::factory()->create(['caption' => 'Original']);
    $image->categories()->attach(GalleryImageCategory::factory()->create());
    Storage::disk('public')->put(
        $image->image_url,
        UploadedFile::fake()->image('photo.jpg')->getContent(),
    );

    livewire(EditGalleryImage::class, ['record' => $image->getRouteKey()])
        ->fillForm(['caption' => 'Updated caption'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($image->refresh()->caption)->toBe('Updated caption');
});

test('can delete a gallery image and its files', function () {
    $image = GalleryImage::factory()->create([
        'image_url' => 'galleries/images/test.jpg',
        'thumbnail_url' => 'galleries/thumbnails/test-thumb.jpg',
    ]);

    Storage::disk('public')->put('galleries/images/test.jpg', 'content');
    Storage::disk('public')->put('galleries/thumbnails/test-thumb.jpg', 'content');

    livewire(EditGalleryImage::class, ['record' => $image->getRouteKey()])
        ->callAction(DeleteAction::class);

    $this->assertModelMissing($image);
    Storage::disk('public')->assertMissing('galleries/images/test.jpg');
    Storage::disk('public')->assertMissing('galleries/thumbnails/test-thumb.jpg');
});
