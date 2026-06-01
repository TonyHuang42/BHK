<?php

namespace App\Livewire\Concerns;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\Collection;
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

            $dimensions = $this->imageDimensions($path);

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

    /**
     * @param  Collection<int, GalleryImage>  $images
     * @return array<int, array{src: string, msrc?: string, width: int, height: int, alt: string, caption: string}>
     */
    private function buildLightboxItemsFromImages(Collection $images): array
    {
        return $images
            ->map(function (GalleryImage $image): ?array {
                $path = $image->image_url;

                if (! $path) {
                    return null;
                }

                $dimensions = $this->imageDimensions($path);

                if ($dimensions === null) {
                    return null;
                }

                $caption = $image->caption ?? '';

                $entry = [
                    'src' => asset('storage/'.$path),
                    'width' => $dimensions['width'],
                    'height' => $dimensions['height'],
                    'alt' => $caption !== '' ? $caption : '相片',
                    'caption' => $caption,
                ];

                if (! empty($image->thumbnail_url)) {
                    $entry['msrc'] = asset('storage/'.$image->thumbnail_url);
                }

                return $entry;
            })
            ->filter()
            ->values()
            ->all();
    }

    /**
     * @return array{width: int, height: int}|null
     */
    private function imageDimensions(string $path): ?array
    {
        return Cache::rememberForever("gallery-image-dimensions:{$path}", function () use ($path) {
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
    }
}
