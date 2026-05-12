<?php

namespace App\Models;

use Database\Factories\PressReleaseCategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PressReleaseCategory extends Model
{
    /** @use HasFactory<PressReleaseCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function pressReleases(): HasMany
    {
        return $this->hasMany(PressRelease::class);
    }
}
