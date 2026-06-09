<?php

use App\Livewire\PressReleaseIndex;
use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('renders english title, summary and category name when locale is en', function () {
    app()->setLocale('en');

    $category = PressReleaseCategory::factory()->create([
        'name' => '中文分類',
        'name_en' => 'English Category',
        'slug' => 'news',
    ]);

    PressRelease::factory()->for($category, 'category')->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => 'English Title',
        'summary' => '中文摘要',
        'summary_en' => 'English summary',
    ]);

    livewire(PressReleaseIndex::class)
        ->assertSee('English Title')
        ->assertSee('English summary')
        ->assertSee('English Category')
        ->assertDontSee('中文標題')
        ->assertDontSee('中文摘要');
});

test('falls back to chinese title when english is empty and locale is en', function () {
    app()->setLocale('en');

    PressRelease::factory()->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => null,
        'summary' => '中文摘要',
        'summary_en' => null,
    ]);

    livewire(PressReleaseIndex::class)
        ->assertSee('中文標題')
        ->assertSee('中文摘要');
});

test('renders chinese title when locale is zh', function () {
    app()->setLocale('zh');

    PressRelease::factory()->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => 'English Title',
    ]);

    livewire(PressReleaseIndex::class)
        ->assertSee('中文標題')
        ->assertDontSee('English Title');
});
