<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedAttributes;
use Database\Factories\GalleryImageCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GalleryImageCategory extends Model
{
    /** @use HasFactory<GalleryImageCategoryFactory> */
    use HasFactory, HasLocalizedAttributes;

    protected $fillable = [
        'name',
        'name_en',
        'slug',
        'sort_order',
    ];

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(GalleryImage::class, 'gallery_image_has_categories')->withTimestamps();
    }
}
