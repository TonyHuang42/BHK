<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class GalleryThumbnailService
{
    public function generate(string $relativePath, int $maxWidth = 400): string
    {
        $thumbnailPath = self::thumbnailPath($relativePath);

        if (Storage::disk('public')->exists($thumbnailPath)) {
            return $thumbnailPath;
        }

        $absolutePath = Storage::disk('public')->path($relativePath);

        if (! is_file($absolutePath)) {
            return $thumbnailPath;
        }

        Storage::disk('public')->makeDirectory(dirname($thumbnailPath));
        $absoluteThumbnailPath = Storage::disk('public')->path($thumbnailPath);

        try {
            (new ImageManager(new Driver))
                ->read($absolutePath)
                ->scaleDown(width: $maxWidth)
                ->toJpeg(75)
                ->save($absoluteThumbnailPath);
        } catch (\Exception $e) {
            Log::warning("Gallery thumbnail generation failed for {$relativePath}: {$e->getMessage()}");
        }

        return $thumbnailPath;
    }

    public static function thumbnailPath(string $relativePath): string
    {
        $dir = dirname($relativePath);
        $name = pathinfo($relativePath, PATHINFO_FILENAME);

        return ($dir === '.' ? '' : $dir.'/').$name.'-thumb.jpg';
    }
}
