<?php

namespace App\Models;

use App\Casts\ArrayWithUnicode;
use App\Services\GalleryThumbnailService;
use Database\Factories\GalleryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    /** @use HasFactory<GalleryFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'date',
        'is_publish',
        'featured_image',
        'images',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'is_publish' => 'boolean',
            'images' => ArrayWithUnicode::class,
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(GalleryCategory::class, 'gallery_has_categories')->withTimestamps();
    }

    protected static function booted(): void
    {
        static::saving(function (Gallery $gallery) {
            if (! $gallery->isDirty('images')) {
                return;
            }

            $images = is_array($gallery->images) ? $gallery->images : [];

            if (empty($images)) {
                return;
            }

            $thumbnailService = app(GalleryThumbnailService::class);
            $normalized = [];

            foreach (array_values($images) as $item) {
                if (! is_array($item) || empty($item['path'])) {
                    continue;
                }

                $expectedThumbnailPath = GalleryThumbnailService::thumbnailPath($item['path']);

                if (! Storage::disk('public')->exists($expectedThumbnailPath)) {
                    $thumbnail = $thumbnailService->generate($item['path']);
                } else {
                    $thumbnail = $expectedThumbnailPath;
                }

                $normalized[] = [
                    'path' => $item['path'],
                    'caption' => $item['caption'] ?? '',
                    'thumbnail' => $thumbnail,
                ];
            }

            $gallery->images = $normalized;
        });

        static::updated(function (Gallery $gallery) {
            if ($gallery->wasChanged('featured_image')) {
                $originalFeaturedImage = $gallery->getOriginal('featured_image');
                if ($originalFeaturedImage) {
                    Storage::disk('public')->delete($originalFeaturedImage);
                }
            }

            if ($gallery->wasChanged('images')) {
                $originalImages = $gallery->getOriginal('images');
                $originalImages = is_string($originalImages) ? json_decode($originalImages, true) : $originalImages;
                $originalImages = is_array($originalImages) ? $originalImages : [];

                $currentImages = is_array($gallery->images) ? $gallery->images : [];
                $currentPaths = array_column($currentImages, 'path');

                foreach ($originalImages as $item) {
                    if (! is_array($item) || empty($item['path'])) {
                        continue;
                    }

                    if (! in_array($item['path'], $currentPaths, true)) {
                        Storage::disk('public')->delete($item['path']);

                        if (! empty($item['thumbnail'])) {
                            Storage::disk('public')->delete($item['thumbnail']);
                        }
                    }
                }
            }
        });

        static::deleting(function (Gallery $gallery) {
            if ($gallery->featured_image) {
                Storage::disk('public')->delete($gallery->featured_image);
            }

            $images = is_array($gallery->images) ? $gallery->images : [];

            foreach ($images as $item) {
                if (! is_array($item)) {
                    continue;
                }

                if (! empty($item['path'])) {
                    Storage::disk('public')->delete($item['path']);
                }

                if (! empty($item['thumbnail'])) {
                    Storage::disk('public')->delete($item['thumbnail']);
                }
            }
        });
    }
}
