<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PressRelease extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'date',
        'thumbnail',
        'body',
        'is_publish',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'is_publish' => 'boolean',
        ];
    }

    protected static function booted(): void
    {
        static::updated(function (PressRelease $pressRelease) {
            if ($pressRelease->wasChanged('thumbnail')) {
                $originalThumbnail = $pressRelease->getOriginal('thumbnail');
                if ($originalThumbnail) {
                    Storage::disk('public')->delete($originalThumbnail);
                }
            }
        });

        static::deleting(function (PressRelease $pressRelease) {
            if ($pressRelease->thumbnail) {
                Storage::disk('public')->delete($pressRelease->thumbnail);
            }
        });
    }
}
