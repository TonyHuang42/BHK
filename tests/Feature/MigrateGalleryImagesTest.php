<?php

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

/**
 * Place a fake image + its thumbnail on the public disk so the Gallery saving
 * hook reuses the thumbnail and the migration has files to copy.
 *
 * @return array{path: string, caption: string, thumbnail: string}
 */
function fakeGalleryImage(string $dir, string $name, string $caption = ''): array
{
    $path = "{$dir}/{$name}.jpg";
    $thumbnail = "{$dir}/{$name}-thumb.jpg";

    Storage::disk('public')->put($path, 'image-bytes');
    Storage::disk('public')->put($thumbnail, 'thumb-bytes');

    return ['path' => $path, 'caption' => $caption, 'thumbnail' => $thumbnail];
}

function makeGallery(GalleryCategory $category, array $images, string $updatedAt): Gallery
{
    $gallery = Gallery::factory()->create([
        'is_publish' => true,
        'featured_image' => 'galleries/featured/cover.jpg',
        'images' => $images,
    ]);

    $gallery->categories()->sync([$category->id]);

    DB::table('galleries')->where('id', $gallery->id)->update(['updated_at' => $updatedAt]);

    return $gallery;
}

beforeEach(function () {
    Storage::fake('public');

    // An "Uncategorized" gallery category is seeded by the migrations, so reuse it.
    $this->general = GalleryCategory::firstOrCreate(['slug' => 'general-1'], ['name' => 'General 1']);
    $this->uncategorized = GalleryCategory::firstOrCreate(['slug' => 'uncategorized'], ['name' => 'Uncategorized']);
});

test('migrates old gallery images into flat records ordered by gallery updated_at', function () {
    Storage::disk('public')->put('galleries/featured/cover.jpg', 'cover');

    $olderImages = [
        fakeGalleryImage('galleries/old-a', '0', 'first caption'),
        fakeGalleryImage('galleries/old-a', '1'),
    ];
    $newerImages = [
        fakeGalleryImage('galleries/old-b', '1_06', 'lone caption'),
    ];

    makeGallery($this->general, $olderImages, '2026-05-22 23:11:20');
    makeGallery($this->uncategorized, $newerImages, '2026-05-27 19:19:28');

    $this->artisan('gallery:migrate-images')->assertSuccessful();

    // One GalleryImage per source image (featured_image is skipped).
    expect(GalleryImage::count())->toBe(3);

    $images = GalleryImage::orderBy('sort_order')->get();

    // sort_order is a 1..N sequence ordered by gallery updated_at then array index.
    expect($images->pluck('sort_order')->all())->toBe([1, 2, 3]);
    expect($images[0]->caption)->toBe('first caption');
    expect($images[1]->caption)->toBeNull(); // empty caption becomes null
    expect($images[2]->caption)->toBe('lone caption');

    // is_publish inherited from the gallery.
    expect($images->every(fn ($image) => $image->is_publish === true))->toBeTrue();

    // Categories recreated with old names/slugs and attached correctly.
    $general = GalleryImageCategory::where('slug', 'general-1')->firstOrFail();
    $uncategorized = GalleryImageCategory::where('slug', 'uncategorized')->firstOrFail();
    expect($general->name)->toBe('General 1');

    expect($images[0]->categories->pluck('id')->all())->toBe([$general->id]);
    expect($images[1]->categories->pluck('id')->all())->toBe([$general->id]);
    expect($images[2]->categories->pluck('id')->all())->toBe([$uncategorized->id]);
});

test('copies image and thumbnail files into the flat folders and keeps originals', function () {
    $source = fakeGalleryImage('galleries/old-a', '0');

    makeGallery($this->general, [$source], '2026-05-22 23:11:20');

    $this->artisan('gallery:migrate-images')->assertSuccessful();

    $image = GalleryImage::firstOrFail();

    expect($image->image_url)->toStartWith('galleries/images/0');
    expect($image->thumbnail_url)->toStartWith('galleries/thumbnails/0');

    Storage::disk('public')->assertExists($image->image_url);
    Storage::disk('public')->assertExists($image->thumbnail_url);

    // Originals are kept.
    Storage::disk('public')->assertExists($source['path']);
    Storage::disk('public')->assertExists($source['thumbnail']);
});

test('aborts when gallery_images already has rows', function () {
    makeGallery($this->general, [fakeGalleryImage('galleries/old-a', '0')], '2026-05-22 23:11:20');

    $this->artisan('gallery:migrate-images')->assertSuccessful();
    expect(GalleryImage::count())->toBe(1);

    // Second run is guarded and creates no duplicates.
    $this->artisan('gallery:migrate-images')->assertFailed();
    expect(GalleryImage::count())->toBe(1);
});
