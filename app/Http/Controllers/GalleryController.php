<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        return view('galleries.index');
    }

    public function show(string $slug): View
    {
        $gallery = Gallery::query()
            ->where('slug', $slug)
            ->where('is_publish', true)
            ->firstOrFail();

        return view('galleries.show', compact('gallery'));
    }
}
