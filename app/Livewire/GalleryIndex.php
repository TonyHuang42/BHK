<?php

namespace App\Livewire;

use App\Livewire\Concerns\BuildsLightboxItems;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class GalleryIndex extends Component
{
    use BuildsLightboxItems;
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
            ->where('slug', '!=', 'uncategorized')
            ->orderBy('name', 'asc')
            ->get();

        $galleries = Gallery::query()
            ->where('is_publish', true)
            ->when($this->category, function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->where('slug', $this->category);
                });
            })
            ->latest('date')
            ->paginate(12);

        return view('livewire.gallery-index', [
            'galleries' => $galleries,
            'categories' => $categories,
        ]);
    }
}
