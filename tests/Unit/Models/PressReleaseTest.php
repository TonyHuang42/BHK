<?php

use App\Models\PressRelease;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('thumbnail is deleted when press release is deleted', function () {
    Storage::fake('public');

    $pressRelease = PressRelease::factory()->create([
        'thumbnail' => 'press-releases/thumbnails/test.jpg',
    ]);

    Storage::disk('public')->put('press-releases/thumbnails/test.jpg', 'content');

    $pressRelease->delete();

    Storage::disk('public')->assertMissing('press-releases/thumbnails/test.jpg');
});

test('original thumbnail is deleted when thumbnail is updated', function () {
    Storage::fake('public');

    $pressRelease = PressRelease::factory()->create([
        'thumbnail' => 'press-releases/thumbnails/old.jpg',
    ]);

    Storage::disk('public')->put('press-releases/thumbnails/old.jpg', 'content');

    $pressRelease->update([
        'thumbnail' => 'press-releases/thumbnails/new.jpg',
    ]);

    Storage::disk('public')->assertMissing('press-releases/thumbnails/old.jpg');
});
