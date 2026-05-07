<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PressRelease extends Model
{
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
}
