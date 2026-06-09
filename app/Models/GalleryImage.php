<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedAttributes;
use App\Services\GalleryThumbnailService;
use Database\Factories\GalleryImageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class GalleryImage extends Model
{
    /** @use HasFactory<GalleryImageFactory> */
    use HasFactory, HasLocalizedAttributes;

    protected $fillable = [
        'is_publish',
        'image_url',
        'thumbnail_url',
        'caption',
        'caption_en',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_publish' => 'boolean',
        ];
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(GalleryImageCategory::class, 'gallery_image_has_categories')->withTimestamps();
    }

    protected static function booted(): void
    {
        static::creating(function (GalleryImage $image) {
            if ($image->sort_order === null) {
                $image->sort_order = (int) static::max('sort_order') + 1;
            }
        });

        static::saving(function (GalleryImage $image) {
            if (! $image->isDirty('image_url') || empty($image->image_url)) {
                return;
            }

            $expectedThumbnailPath = GalleryThumbnailService::thumbnailPath($image->image_url, 'galleries/thumbnails');

            if (Storage::disk('public')->exists($expectedThumbnailPath)) {
                $image->thumbnail_url = $expectedThumbnailPath;

                return;
            }

            $image->thumbnail_url = app(GalleryThumbnailService::class)->generate($image->image_url, 'galleries/thumbnails');
        });

        static::updated(function (GalleryImage $image) {
            if (! $image->wasChanged('image_url')) {
                return;
            }

            $originalImage = $image->getOriginal('image_url');
            if ($originalImage) {
                Storage::disk('public')->delete($originalImage);
            }

            $originalThumbnail = $image->getOriginal('thumbnail_url');
            if ($originalThumbnail) {
                Storage::disk('public')->delete($originalThumbnail);
            }
        });

        static::deleting(function (GalleryImage $image) {
            if ($image->image_url) {
                Storage::disk('public')->delete($image->image_url);
            }

            if ($image->thumbnail_url) {
                Storage::disk('public')->delete($image->thumbnail_url);
            }
        });
    }
}
