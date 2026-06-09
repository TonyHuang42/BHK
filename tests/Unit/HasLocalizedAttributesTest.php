<?php

use App\Models\PressRelease;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('localized returns english value when locale is en and _en field is filled', function () {
    app()->setLocale('en');

    $pressRelease = PressRelease::factory()->create([
        'title' => '中文標題',
        'title_en' => 'English Title',
    ]);

    expect($pressRelease->localized('title'))->toBe('English Title');
});

test('localized falls back to chinese when locale is en but _en field is empty', function () {
    app()->setLocale('en');

    $pressRelease = PressRelease::factory()->create([
        'title' => '中文標題',
        'title_en' => null,
    ]);

    expect($pressRelease->localized('title'))->toBe('中文標題');
});

test('localized returns chinese value when locale is zh even if _en field is filled', function () {
    app()->setLocale('zh');

    $pressRelease = PressRelease::factory()->create([
        'title' => '中文標題',
        'title_en' => 'English Title',
    ]);

    expect($pressRelease->localized('title'))->toBe('中文標題');
});

test('localized falls back to chinese when _en field is an empty string', function () {
    app()->setLocale('en');

    $pressRelease = PressRelease::factory()->create([
        'title' => '中文標題',
        'title_en' => '',
    ]);

    expect($pressRelease->localized('title'))->toBe('中文標題');
});
