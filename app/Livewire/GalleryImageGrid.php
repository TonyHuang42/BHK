<?php

namespace App\Livewire;

use App\Livewire\Concerns\BuildsLightboxItems;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;

class GalleryImageGrid extends Component
{
    use BuildsLightboxItems;

    #[Url(as: 'category', except: '')]
    public string $category = '';

    public function render(): View
    {
        $categories = GalleryImageCategory::query()
            ->orderBy('name', 'asc')
            ->get();

        $images = GalleryImage::query()
            ->where('is_publish', true)
            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->where('slug', $this->category);
                });
            })
            ->orderBy('sort_order')
            ->get();

        return view('livewire.gallery-image-grid', [
            'categories' => $categories,
            'lightboxItems' => $this->buildLightboxItemsFromImages($images),
        ]);
    }
}
