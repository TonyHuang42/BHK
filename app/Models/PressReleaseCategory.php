<?php

namespace App\Models;

use App\Models\Concerns\HasLocalizedAttributes;
use Database\Factories\PressReleaseCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PressReleaseCategory extends Model
{
    /** @use HasFactory<PressReleaseCategoryFactory> */
    use HasFactory, HasLocalizedAttributes;

    protected $fillable = [
        'name',
        'name_en',
        'slug',
    ];

    public function pressReleases(): HasMany
    {
        return $this->hasMany(PressRelease::class);
    }
}
