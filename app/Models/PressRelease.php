<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class PressRelease extends Model
{
    use HasFactory, HasLocalizedAttributes;

    protected $fillable = [
        'press_release_category_id',
        'title',
        'title_en',
        'slug',
        'summary',
        'summary_en',
        'date',
        'featured_image',
        'body',
        'body_en',
        'is_publish',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'is_publish' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PressReleaseCategory::class, 'press_release_category_id');
    }

    protected static function booted(): void
    {
        static::updated(function (PressRelease $pressRelease) {
            if ($pressRelease->wasChanged('featured_image')) {
                $originalFeaturedImage = $pressRelease->getOriginal('featured_image');
                if ($originalFeaturedImage) {
                    Storage::disk('public')->delete($originalFeaturedImage);
                }
            }
        });

        static::deleting(function (PressRelease $pressRelease) {
            if ($pressRelease->featured_image) {
                Storage::disk('public')->delete($pressRelease->featured_image);
            }
        });
    }
}
