<?php

use App\Models\Gallery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('featured image and images are deleted when gallery is deleted', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'featured_image' => 'galleries/featured-images/test.jpg',
        'images' => ['galleries/image1.jpg', 'galleries/image2.jpg'],
    ]);

    Storage::disk('public')->put('galleries/featured-images/test.jpg', 'content');
    Storage::disk('public')->put('galleries/image1.jpg', 'content');
    Storage::disk('public')->put('galleries/image2.jpg', 'content');

    $gallery->delete();

    Storage::disk('public')->assertMissing('galleries/featured-images/test.jpg');
    Storage::disk('public')->assertMissing('galleries/image1.jpg');
    Storage::disk('public')->assertMissing('galleries/image2.jpg');
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

test('removed images are deleted when images are updated', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'images' => ['galleries/image1.jpg', 'galleries/image2.jpg'],
    ]);

    Storage::disk('public')->put('galleries/image1.jpg', 'content');
    Storage::disk('public')->put('galleries/image2.jpg', 'content');

    $gallery->update([
        'images' => ['galleries/image1.jpg', 'galleries/image3.jpg'],
    ]);

    Storage::disk('public')->assertMissing('galleries/image2.jpg');
    Storage::disk('public')->assertExists('galleries/image1.jpg');
});
