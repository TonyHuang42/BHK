<?php

use App\Models\PressRelease;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('featured image is deleted when press release is deleted', function () {
    Storage::fake('public');

    $pressRelease = PressRelease::factory()->create([
        'featured_image' => 'press-releases/featured-images/test.jpg',
    ]);

    Storage::disk('public')->put('press-releases/featured-images/test.jpg', 'content');

    $pressRelease->delete();

    Storage::disk('public')->assertMissing('press-releases/featured-images/test.jpg');
});

test('original featured image is deleted when featured image is updated', function () {
    Storage::fake('public');

    $pressRelease = PressRelease::factory()->create([
        'featured_image' => 'press-releases/featured-images/old.jpg',
    ]);

    Storage::disk('public')->put('press-releases/featured-images/old.jpg', 'content');

    $pressRelease->update([
        'featured_image' => 'press-releases/featured-images/new.jpg',
    ]);

    Storage::disk('public')->assertMissing('press-releases/featured-images/old.jpg');
});
