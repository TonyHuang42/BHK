<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PressReleaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Language Switch Route
|--------------------------------------------------------------------------
*/
Route::get('/lang/{locale}', function ($locale) {

    if (! in_array($locale, ['en', 'zh'])) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();

})->name('lang.switch');

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');

Route::view('battle-of-hong-kong', 'battle-of-hong-kong.index')->name('battle.index');
Route::view('guerrilla-resistance', 'guerrilla-resistance.index')->name('guerrilla.index');
Route::view('under-japanese-occupation', 'under-japanese-occupation.index')->name('occupation.index');
Route::view('people-and-stories', 'people-and-stories.index')->name('people.index');

Route::get('galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('galleries/{slug}', [GalleryController::class, 'show'])->name('galleries.show');
Route::get('press-releases', [PressReleaseController::class, 'index'])->name('press-releases.index');
Route::get('press-releases/{slug}', [PressReleaseController::class, 'show'])->name('press-releases.show');
