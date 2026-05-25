<?php

namespace App\Livewire;

use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PressReleaseIndex extends Component
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
        $categories = PressReleaseCategory::query()
            ->where('slug', '!=', 'uncategorized')
            ->orderBy('name', 'asc')
            ->get();

        $pressReleases = PressRelease::query()
            ->with('category')
            ->where('is_publish', true)
            ->when($this->category, function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->category);
                });
            })
            ->latest('date')
            ->paginate(10);

        return view('livewire.press-release-index', [
            'pressReleases' => $pressReleases,
            'categories' => $categories,
        ]);
    }
}
