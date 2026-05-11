<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $galleries = Gallery::query()
            ->where('is_publish', true)
            ->latest('date')
            ->paginate(12);

        $galleries->getCollection()->transform(function (Gallery $gallery) {
            $gallery->lightbox_items = $this->buildLightboxItems($gallery);

            return $gallery;
        });

        return view('galleries.index', compact('galleries'));
    }

    /**
     * @return array<int, array{src: string, width: int, height: int, alt: string}>
     */
    private function buildLightboxItems(Gallery $gallery): array
    {
        $images = is_array($gallery->images) ? $gallery->images : [];

        return array_values(array_filter(array_map(function (string $path) use ($gallery) {
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

            return [
                'src' => asset('storage/'.$path),
                'width' => $dimensions['width'],
                'height' => $dimensions['height'],
                'alt' => $gallery->title,
            ];
        }, $images)));
    }
}
