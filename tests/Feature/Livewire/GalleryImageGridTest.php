<?php

use App\Livewire\GalleryImageGrid;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(function () {
    Storage::fake('public');
});

/**
 * Create a published gallery image backed by a real file so the lightbox
 * builder can resolve its dimensions and include it in the grid.
 */
function publishedImageWithFile(array $attributes = []): GalleryImage
{
    $image = GalleryImage::factory()->create(array_merge(['is_publish' => true], $attributes));

    Storage::disk('public')->put(
        $image->image_url,
        UploadedFile::fake()->image('photo.jpg', 400, 300)->getContent(),
    );

    return $image;
}

test('the public gallery page loads', function () {
    $this->get(route('galleries.index'))->assertSuccessful();
});

test('renders published images and hides unpublished ones', function () {
    publishedImageWithFile(['caption' => 'Visible Photo']);

    $hidden = GalleryImage::factory()->create(['caption' => 'Hidden Photo', 'is_publish' => false]);
    Storage::disk('public')->put(
        $hidden->image_url,
        UploadedFile::fake()->image('hidden.jpg', 400, 300)->getContent(),
    );

    livewire(GalleryImageGrid::class)
        ->assertSee('Visible Photo')
        ->assertDontSee('Hidden Photo');
});

test('filters images by category', function () {
    $category = GalleryImageCategory::factory()->create(['slug' => 'wwii']);

    $inCategory = publishedImageWithFile(['caption' => 'In Category']);
    $inCategory->categories()->attach($category);

    publishedImageWithFile(['caption' => 'Out Of Category']);

    livewire(GalleryImageGrid::class)
        ->set('category', 'wwii')
        ->assertSee('In Category')
        ->assertDontSee('Out Of Category');
});

test('shows an empty state when there are no images', function () {
    livewire(GalleryImageGrid::class)
        ->assertSee('暫無圖片');
});

test('lists categories as filter options', function () {
    GalleryImageCategory::factory()->create(['name' => 'Wartime', 'name_en' => 'Wartime']);

    livewire(GalleryImageGrid::class)
        ->assertSee('全部')
        ->assertSee('Wartime');
});

test('lists categories ordered by sort_order', function () {
    GalleryImageCategory::factory()->create(['name' => 'Alpha', 'name_en' => 'Alpha', 'sort_order' => 2]);
    GalleryImageCategory::factory()->create(['name' => 'Bravo', 'name_en' => 'Bravo', 'sort_order' => 1]);

    livewire(GalleryImageGrid::class)
        ->assertSeeInOrder(['Bravo', 'Alpha']);
});

test('renders english caption when locale is en', function () {
    app()->setLocale('en');

    publishedImageWithFile(['caption' => '中文說明', 'caption_en' => 'English Caption']);

    livewire(GalleryImageGrid::class)
        ->assertSee('English Caption')
        ->assertDontSee('中文說明');
});

test('falls back to chinese caption when english caption is empty and locale is en', function () {
    app()->setLocale('en');

    publishedImageWithFile(['caption' => '中文說明', 'caption_en' => null]);

    livewire(GalleryImageGrid::class)
        ->assertSee('中文說明');
});

test('renders english category name when locale is en', function () {
    app()->setLocale('en');

    GalleryImageCategory::factory()->create(['name' => '中文分類', 'name_en' => 'English Category']);

    livewire(GalleryImageGrid::class)
        ->assertSee('English Category')
        ->assertDontSee('中文分類');
});
