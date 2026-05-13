<?php

namespace App\Http\Controllers;

use App\Models\PressRelease;
use Illuminate\View\View;

class PressReleaseController extends Controller
{
    public function index(): View
    {
        $pressReleases = PressRelease::query()
            ->with('category')
            ->where('is_publish', true)
            ->latest('date')
            ->paginate(10);

        return view('press-releases.index', compact('pressReleases'));
    }
}
