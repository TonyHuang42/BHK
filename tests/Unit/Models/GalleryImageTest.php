<?php

use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use App\Services\GalleryThumbnailService;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('gallery image belongs to many categories', function () {
    $image = GalleryImage::factory()->create();
    $category = GalleryImageCategory::factory()->create();
    $image->categories()->attach($category);

    expect($image->categories())->toBeInstanceOf(BelongsToMany::class);
    expect($image->categories->first())->toBeInstanceOf(GalleryImageCategory::class);
});

test('is_publish is cast to boolean', function () {
    $image = GalleryImage::factory()->create(['is_publish' => 1]);

    expect($image->is_publish)->toBeBool()->toBeTrue();
});

test('generates a thumbnail in the thumbnails directory when the image is saved', function () {
    Storage::fake('public');

    Storage::disk('public')->put(
        'galleries/images/photo.jpg',
        UploadedFile::fake()->image('photo.jpg', 800, 600)->getContent(),
    );

    $image = GalleryImage::factory()->create([
        'image_url' => 'galleries/images/photo.jpg',
        'thumbnail_url' => null,
    ]);

    expect($image->fresh()->thumbnail_url)->toBe('galleries/thumbnails/photo-thumb.jpg');
    Storage::disk('public')->assertExists('galleries/thumbnails/photo-thumb.jpg');
});

test('does not regenerate the thumbnail when one already exists', function () {
    Storage::fake('public');

    Storage::disk('public')->put('galleries/thumbnails/photo-thumb.jpg', 'existing');

    $this->mock(GalleryThumbnailService::class)
        ->shouldNotReceive('generate');

    $image = GalleryImage::factory()->create([
        'image_url' => 'galleries/images/photo.jpg',
        'thumbnail_url' => null,
    ]);

    expect($image->fresh()->thumbnail_url)->toBe('galleries/thumbnails/photo-thumb.jpg');
});

test('new images are appended to the end with the next sort order', function () {
    $first = GalleryImage::factory()->create();
    $second = GalleryImage::factory()->create();

    expect($first->sort_order)->toBe(1);
    expect($second->sort_order)->toBe(2);
});

test('an explicit sort order is preserved on create', function () {
    $image = GalleryImage::factory()->create(['sort_order' => 10]);

    expect($image->sort_order)->toBe(10);
});

test('image and thumbnail are deleted when the gallery image is deleted', function () {
    Storage::fake('public');

    $image = GalleryImage::factory()->create([
        'image_url' => 'galleries/images/test.jpg',
        'thumbnail_url' => 'galleries/thumbnails/test-thumb.jpg',
    ]);

    Storage::disk('public')->put('galleries/images/test.jpg', 'content');
    Storage::disk('public')->put('galleries/thumbnails/test-thumb.jpg', 'content');

    $image->delete();

    Storage::disk('public')->assertMissing('galleries/images/test.jpg');
    Storage::disk('public')->assertMissing('galleries/thumbnails/test-thumb.jpg');
});

test('previous image and thumbnail are removed when the image is replaced', function () {
    Storage::fake('public');

    $image = GalleryImage::factory()->create([
        'image_url' => 'galleries/images/old.jpg',
        'thumbnail_url' => 'galleries/thumbnails/old-thumb.jpg',
    ]);

    Storage::disk('public')->put('galleries/images/old.jpg', 'content');
    Storage::disk('public')->put('galleries/thumbnails/old-thumb.jpg', 'content');

    $image->update(['image_url' => 'galleries/images/new.jpg']);

    Storage::disk('public')->assertMissing('galleries/images/old.jpg');
    Storage::disk('public')->assertMissing('galleries/thumbnails/old-thumb.jpg');
});
