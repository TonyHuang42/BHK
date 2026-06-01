<?php

namespace App\Models;

use Database\Factories\GalleryImageCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GalleryImageCategory extends Model
{
    /** @use HasFactory<GalleryImageCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(GalleryImage::class, 'gallery_image_has_categories')->withTimestamps();
    }
}
