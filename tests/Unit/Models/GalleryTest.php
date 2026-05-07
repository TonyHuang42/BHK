<?php

use App\Models\Gallery;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('thumbnail and images are deleted when gallery is deleted', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'thumbnail' => 'galleries/thumbnails/test.jpg',
        'images' => ['galleries/image1.jpg', 'galleries/image2.jpg'],
    ]);

    Storage::disk('public')->put('galleries/thumbnails/test.jpg', 'content');
    Storage::disk('public')->put('galleries/image1.jpg', 'content');
    Storage::disk('public')->put('galleries/image2.jpg', 'content');

    $gallery->delete();

    Storage::disk('public')->assertMissing('galleries/thumbnails/test.jpg');
    Storage::disk('public')->assertMissing('galleries/image1.jpg');
    Storage::disk('public')->assertMissing('galleries/image2.jpg');
});

test('original thumbnail is deleted when thumbnail is updated', function () {
    Storage::fake('public');

    $gallery = Gallery::factory()->create([
        'thumbnail' => 'galleries/thumbnails/old.jpg',
    ]);

    Storage::disk('public')->put('galleries/thumbnails/old.jpg', 'content');

    $gallery->update([
        'thumbnail' => 'galleries/thumbnails/new.jpg',
    ]);

    Storage::disk('public')->assertMissing('galleries/thumbnails/old.jpg');
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
