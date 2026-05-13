<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryIndex extends Component
{
    use WithPagination;

    #[Url(as: 'category', except: '')]
    public string $category = '';

    public function updatingCategory(): void
    {
        $this->resetPage();
    }

    public function setCategory(string $slug): void
    {
        $this->category = $slug;
        $this->resetPage();
    }

    public function render(): View
    {
        $categories = GalleryCategory::query()
            ->orderBy('name', 'asc')
            ->get();

        $galleries = Gallery::query()
            ->where('is_publish', true)
            ->when($this->category, function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->category);
                });
            })
            ->latest('date')
            ->paginate(12);

        $galleries->getCollection()->transform(function (Gallery $gallery) {
            $gallery->lightbox_items = $this->buildLightboxItems($gallery);

            return $gallery;
        });

        return view('livewire.gallery-index', [
            'galleries' => $galleries,
            'categories' => $categories,
        ]);
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
