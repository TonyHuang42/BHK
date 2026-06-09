<?php

use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('show page renders english content when locale is en', function () {
    $category = PressReleaseCategory::factory()->create([
        'name' => '中文分類',
        'name_en' => 'English Category',
    ]);

    $pressRelease = PressRelease::factory()->for($category, 'category')->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => 'English Title',
        'summary' => '中文摘要',
        'summary_en' => 'English summary',
        'body' => '<p>中文內容</p>',
        'body_en' => '<p>English body</p>',
    ]);

    $this->withSession(['locale' => 'en'])
        ->get(route('press-releases.show', $pressRelease->slug))
        ->assertSuccessful()
        ->assertSee('English Title')
        ->assertSee('English body', false)
        ->assertSee('English Category')
        ->assertDontSee('中文標題')
        ->assertDontSee('中文內容', false);
});

test('show page falls back to chinese content when english is empty and locale is en', function () {
    $pressRelease = PressRelease::factory()->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => null,
        'body' => '<p>中文內容</p>',
        'body_en' => null,
    ]);

    $this->withSession(['locale' => 'en'])
        ->get(route('press-releases.show', $pressRelease->slug))
        ->assertSuccessful()
        ->assertSee('中文標題')
        ->assertSee('中文內容', false);
});

test('show page renders chinese content when locale is zh', function () {
    $pressRelease = PressRelease::factory()->create([
        'is_publish' => true,
        'title' => '中文標題',
        'title_en' => 'English Title',
        'body' => '<p>中文內容</p>',
        'body_en' => '<p>English body</p>',
    ]);

    $this->withSession(['locale' => 'zh'])
        ->get(route('press-releases.show', $pressRelease->slug))
        ->assertSuccessful()
        ->assertSee('中文標題')
        ->assertSee('中文內容', false)
        ->assertDontSee('English Title')
        ->assertDontSee('English body', false);
});
