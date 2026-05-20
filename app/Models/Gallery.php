<?php

namespace App\Models;

use Database\Factories\GalleryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    /** @use HasFactory<GalleryFactory> */
    use HasFactory;

    protected $fillable = [
        'gallery_category_id',
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
            'images' => 'array',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class, 'gallery_category_id');
    }

    protected static function booted(): void
    {
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

                $deletedImages = array_diff($originalImages, $currentImages);

                foreach ($deletedImages as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });

        static::deleting(function (Gallery $gallery) {
            if ($gallery->featured_image) {
                Storage::disk('public')->delete($gallery->featured_image);
            }

            if (is_array($gallery->images)) {
                foreach ($gallery->images as $image) {
                    Storage::disk('public')->delete($image);
                }
            }
        });
    }
}
