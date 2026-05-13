<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\View\View;

class PressReleaseController extends Controller
{
    public function index(): View
    {
        return view('press-releases.index');
    }

    public function show(string $slug): View
    {
        $pressRelease = PressRelease::query()
            ->with('category')
            ->where('slug', $slug)
            ->where('is_publish', true)
            ->firstOrFail();

        return view('press-releases.show', compact('pressRelease'));
    }
}
