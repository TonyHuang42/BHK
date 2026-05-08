<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::prefix('battle-of-hong-kong')->name('battle.')->group(function () {
    Route::view('/', 'battle-of-hong-kong.index')->name('index');
});

Route::prefix('guerrilla-resistance')->name('guerrilla.')->group(function () {
    Route::redirect('/', '/guerrilla-resistance/hk-kowloon-brigade');
    Route::view('/hk-kowloon-brigade', 'guerrilla-resistance.hk-kowloon-brigade')->name('hk-kowloon-brigade');
    Route::view('/guerrilla-warfare', 'guerrilla-resistance.guerrilla-warfare')->name('guerrilla-warfare');
    Route::view('/intelligence-and-rescue', 'guerrilla-resistance.intelligence-and-rescue')->name('intelligence-and-rescue');
    Route::view('/underground-resistance', 'guerrilla-resistance.underground-resistance')->name('underground-resistance');
});

Route::prefix('under-japanese-occupation')->name('occupation.')->group(function () {
    Route::redirect('/', '/under-japanese-occupation/occupation-rule');
    Route::view('/occupation-rule', 'under-japanese-occupation.occupation-rule')->name('occupation-rule');
    Route::view('/survival-and-rationing', 'under-japanese-occupation.survival-and-rationing')->name('survival-and-rationing');
    Route::view('/economy-and-society', 'under-japanese-occupation.economy-and-society')->name('economy-and-society');
    Route::view('/everyday-life-wartime', 'under-japanese-occupation.everyday-life-wartime')->name('everyday-life-wartime');
});

Route::prefix('people-and-stories')->name('people.')->group(function () {
    Route::redirect('/', '/people-and-stories/resistance-figures');
    Route::view('/resistance-figures', 'people-and-stories.resistance-figures')->name('resistance-figures');
    Route::view('/village-memories', 'people-and-stories.village-memories')->name('village-memories');
    Route::view('/mutual-aid', 'people-and-stories.mutual-aid')->name('mutual-aid');
    Route::view('/rescue-stories', 'people-and-stories.rescue-stories')->name('rescue-stories');
});
