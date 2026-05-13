<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        return view('galleries.index');
    }
}
