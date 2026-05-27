<?php

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Services\GalleryThumbnailService;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('featured image and images are deleted when gallery is deleted', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'featured_image' => 'galleries/featured-images/test.jpg',
        'images' => [
            ['path' => 'galleries/image1.jpg', 'caption' => '', 'thumbnail' => 'galleries/image1-thumb.jpg'],
            ['path' => 'galleries/image2.jpg', 'caption' => '', 'thumbnail' => 'galleries/image2-thumb.jpg'],
        ],
    ]);

    Storage::disk('public')->put('galleries/featured-images/test.jpg', 'content');
    Storage::disk('public')->put('galleries/image1.jpg', 'content');
    Storage::disk('public')->put('galleries/image2.jpg', 'content');
    Storage::disk('public')->put('galleries/image1-thumb.jpg', 'content');
    Storage::disk('public')->put('galleries/image2-thumb.jpg', 'content');

    $gallery->delete();

    Storage::disk('public')->assertMissing('galleries/featured-images/test.jpg');
    Storage::disk('public')->assertMissing('galleries/image1.jpg');
    Storage::disk('public')->assertMissing('galleries/image2.jpg');
    Storage::disk('public')->assertMissing('galleries/image1-thumb.jpg');
    Storage::disk('public')->assertMissing('galleries/image2-thumb.jpg');
});

test('original featured image is deleted when featured image is updated', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'featured_image' => 'galleries/featured-images/old.jpg',
    ]);

    Storage::disk('public')->put('galleries/featured-images/old.jpg', 'content');

    $gallery->update([
        'featured_image' => 'galleries/featured-images/new.jpg',
    ]);

    Storage::disk('public')->assertMissing('galleries/featured-images/old.jpg');
});

test('removed images and their thumbnails are deleted when images are updated', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'images' => [
            ['path' => 'galleries/image1.jpg', 'caption' => '', 'thumbnail' => 'galleries/image1-thumb.jpg'],
            ['path' => 'galleries/image2.jpg', 'caption' => '', 'thumbnail' => 'galleries/image2-thumb.jpg'],
        ],
    ]);

    Storage::disk('public')->put('galleries/image1.jpg', 'content');
    Storage::disk('public')->put('galleries/image2.jpg', 'content');
    Storage::disk('public')->put('galleries/image1-thumb.jpg', 'content');
    Storage::disk('public')->put('galleries/image2-thumb.jpg', 'content');

    $gallery->update([
        'images' => [
            ['path' => 'galleries/image1.jpg', 'caption' => '', 'thumbnail' => 'galleries/image1-thumb.jpg'],
            ['path' => 'galleries/image3.jpg', 'caption' => '', 'thumbnail' => 'galleries/image3-thumb.jpg'],
        ],
    ]);

    Storage::disk('public')->assertMissing('galleries/image2.jpg');
    Storage::disk('public')->assertMissing('galleries/image2-thumb.jpg');
    Storage::disk('public')->assertExists('galleries/image1.jpg');
});

test('gallery belongs to many categories', function () {
    $gallery = Gallery::factory()->create();

    expect($gallery->categories())->toBeInstanceOf(BelongsToMany::class);
    expect($gallery->categories->first())->toBeInstanceOf(GalleryCategory::class);
});

test('date is cast to a carbon instance', function () {
    $gallery = Gallery::factory()->create(['date' => '2024-06-15']);

    expect($gallery->date)->toBeInstanceOf(Carbon::class);
    expect($gallery->date->format('Y-m-d'))->toBe('2024-06-15');
});

test('images is cast to array', function () {
    $gallery = Gallery::factory()->create();

    expect($gallery->images)->toBeArray();
});

test('is_publish is cast to boolean', function () {
    $gallery = Gallery::factory()->create(['is_publish' => 1]);

    expect($gallery->is_publish)->toBeBool()->toBeTrue();
});

test('generates thumbnail for images with no existing thumbnail', function () {
    Storage::fake('public');

    $imagePath = 'galleries/test-image.jpg';

    $this->mock(GalleryThumbnailService::class)
        ->shouldReceive('generate')
        ->once()
        ->with($imagePath)
        ->andReturn('galleries/test-image-thumb.jpg');

    $gallery = Gallery::factory()->create([
        'images' => [
            ['path' => $imagePath, 'caption' => 'Test', 'thumbnail' => null],
        ],
    ]);

    expect($gallery->fresh()->images[0]['thumbnail'])->toBe('galleries/test-image-thumb.jpg');
});

test('preserves thumbnail for images with existing thumbnail in storage', function () {
    Storage::fake('public');

    $imagePath = 'galleries/test-image.jpg';
    $existingThumbnail = 'galleries/test-image-thumb.jpg';
    Storage::disk('public')->put($existingThumbnail, 'content');

    $this->mock(GalleryThumbnailService::class)
        ->shouldNotReceive('generate');

    $gallery = Gallery::factory()->create([
        'images' => [
            ['path' => $imagePath, 'caption' => '', 'thumbnail' => $existingThumbnail],
        ],
    ]);

    expect($gallery->fresh()->images[0]['thumbnail'])->toBe($existingThumbnail);
});

test('regenerates thumbnail when image path changes but old thumbnail still exists', function () {
    Storage::fake('public');

    $oldThumbnail = 'galleries/old-image-thumb.jpg';
    Storage::disk('public')->put($oldThumbnail, 'old content');

    $gallery = Gallery::factory()->create([
        'images' => [
            ['path' => 'galleries/old-image.jpg', 'caption' => '', 'thumbnail' => $oldThumbnail],
        ],
    ]);

    $this->mock(GalleryThumbnailService::class)
        ->shouldReceive('generate')
        ->once()
        ->with('galleries/new-image.jpg')
        ->andReturn('galleries/new-image-thumb.jpg');

    $gallery->update([
        'images' => [
            ['path' => 'galleries/new-image.jpg', 'caption' => '', 'thumbnail' => $oldThumbnail],
        ],
    ]);

    expect($gallery->fresh()->images[0]['thumbnail'])->toBe('galleries/new-image-thumb.jpg');
});

test('images with empty path are skipped during normalization', function () {
    Storage::fake('public');

    $validPath = 'galleries/valid.jpg';
    $validThumbnail = 'galleries/valid-thumb.jpg';
    Storage::disk('public')->put($validThumbnail, 'content');

    $this->mock(GalleryThumbnailService::class)
        ->shouldNotReceive('generate');

    $gallery = Gallery::factory()->create([
        'images' => [
            ['path' => '', 'caption' => 'Empty path', 'thumbnail' => null],
            ['path' => $validPath, 'caption' => 'Valid', 'thumbnail' => $validThumbnail],
        ],
    ]);

    expect($gallery->fresh()->images)->toHaveCount(1);
    expect($gallery->fresh()->images[0]['path'])->toBe($validPath);
});
