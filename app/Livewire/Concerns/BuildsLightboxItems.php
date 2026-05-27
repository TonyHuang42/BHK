<?php

namespace App\Livewire\Concerns;

use App\Models\Gallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

trait BuildsLightboxItems
{
    /**
     * @return array<int, array{src: string, msrc?: string, width: int, height: int, alt: string, caption: string}>
     */
    private function buildLightboxItems(Gallery $gallery): array
    {
        $images = is_array($gallery->images) ? $gallery->images : [];

        return array_values(array_filter(array_map(function (array $item) use ($gallery) {
            $path = $item['path'] ?? null;

            if (! $path) {
                return null;
            }

            $dimensions = Cache::rememberForever("gallery-image-dimensions:{$path}", function () use ($path) {
                $absolutePath = Storage::disk('public')->path($path);

                if (! is_file($absolutePath)) {
                    return null;
                }

                $size = @getimagesize($absolutePath);

                if ($size === false) {
                    return null;
                }

                return ['width' => $size[0], 'height' => $size[1]];
            });

            if ($dimensions === null) {
                return null;
            }

            $entry = [
                'src' => asset('storage/'.$path),
                'width' => $dimensions['width'],
                'height' => $dimensions['height'],
                'alt' => $item['caption'] ?: $gallery->title,
                'caption' => $item['caption'] ?? '',
            ];

            if (! empty($item['thumbnail'])) {
                $entry['msrc'] = asset('storage/'.$item['thumbnail']);
            }

            return $entry;
        }, $images)));
    }
}
