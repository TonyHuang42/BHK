<?php

namespace App\Console\Commands;

use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use App\Services\GalleryThumbnailService;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MigrateGalleryImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gallery:migrate-images {--force : Migrate even when gallery_images already has rows}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate old album galleries into flat gallery_images records, carrying over categories, files and sort order.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        if (GalleryImage::query()->exists() && ! $this->option('force')) {
            $this->error('gallery_images is not empty. Clear it first or pass --force to proceed (may create duplicates).');

            return self::FAILURE;
        }

        $disk = Storage::disk('public');

        $galleries = Gallery::query()
            ->with('categories')
            ->orderBy('updated_at')
            ->orderBy('id')
            ->get();

        $sortOrder = 1;
        $galleriesProcessed = 0;
        $imagesCreated = 0;

        foreach ($galleries as $gallery) {
            $categoryIds = $this->resolveCategoryIds($gallery);

            $images = is_array($gallery->images) ? $gallery->images : [];

            foreach ($images as $image) {
                if (! is_array($image) || empty($image['path'])) {
                    continue;
                }

                $newImagePath = $this->copyImageFiles($disk, $image);

                $galleryImage = GalleryImage::create([
                    'image_url' => $newImagePath,
                    'caption' => filled($image['caption'] ?? null) ? $image['caption'] : null,
                    'is_publish' => $gallery->is_publish,
                    'sort_order' => $sortOrder++,
                ]);

                $galleryImage->categories()->sync($categoryIds);

                $imagesCreated++;
            }

            $galleriesProcessed++;
        }

        $this->info("Processed {$galleriesProcessed} galleries, created {$imagesCreated} gallery images.");

        return self::SUCCESS;
    }

    /**
     * Ensure matching GalleryImageCategory rows exist for the gallery's categories
     * and return their ids.
     *
     * @return array<int, int>
     */
    private function resolveCategoryIds(Gallery $gallery): array
    {
        return $gallery->categories
            ->map(fn ($category) => GalleryImageCategory::firstOrCreate(
                ['slug' => $category->slug],
                ['name' => $category->name],
            )->id)
            ->all();
    }

    /**
     * Copy the source image and thumbnail into the flat gallery folders and
     * return the new image path. Naming rule: original name + '-' + random(6) + extension.
     *
     * @param  array{path: string, caption?: string, thumbnail?: string}  $image
     */
    private function copyImageFiles(Filesystem $disk, array $image): string
    {
        $extension = pathinfo($image['path'], PATHINFO_EXTENSION);
        $base = pathinfo($image['path'], PATHINFO_FILENAME).'-'.Str::random(6);

        $newImagePath = 'galleries/images/'.$base.($extension !== '' ? '.'.$extension : '');

        if ($disk->exists($image['path'])) {
            $disk->copy($image['path'], $newImagePath);
        }

        if (! empty($image['thumbnail']) && $disk->exists($image['thumbnail'])) {
            $newThumbnailPath = GalleryThumbnailService::thumbnailPath($newImagePath, 'galleries/thumbnails');
            $disk->copy($image['thumbnail'], $newThumbnailPath);
        }

        return $newImagePath;
    }
}
