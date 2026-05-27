<?php

namespace App\Livewire;

use App\Livewire\Concerns\BuildsLightboxItems;
use App\Models\Gallery;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class GalleryShow extends Component
{
    use BuildsLightboxItems;

    public Gallery $gallery;

    public function render(): View
    {
        $lightboxItems = $this->buildLightboxItems($this->gallery);

        return view('livewire.gallery-show', [
            'lightboxItems' => $lightboxItems,
        ]);
    }
}
