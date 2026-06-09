<?php

use App\Filament\Admin\Resources\PressReleaseCategories\Pages\CreatePressReleaseCategory;
use App\Filament\Admin\Resources\PressReleaseCategories\Pages\EditPressReleaseCategory;
use App\Filament\Admin\Resources\PressReleaseCategories\Pages\ListPressReleaseCategories;
use App\Filament\Admin\Resources\PressReleaseCategories\PressReleaseCategoryResource;
use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

test('can list press release categories', function () {
    $categories = PressReleaseCategory::factory()->count(5)->create();

    livewire(ListPressReleaseCategories::class)
        ->assertCanSeeTableRecords($categories)
        ->assertSuccessful();
});

test('can render create page', function () {
    $this->get(PressReleaseCategoryResource::getUrl('create'))->assertSuccessful();
});

test('can create press release category', function () {
    $newData = PressReleaseCategory::factory()->make();

    livewire(CreatePressReleaseCategory::class)
        ->fillForm([
            'name' => $newData->name,
            'name_en' => $newData->name_en,
        ])
        ->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $this->assertDatabaseHas('press_release_categories', [
        'name' => $newData->name,
        'slug' => $newData->slug,
    ]);
});

test('generates slug from name', function () {
    livewire(CreatePressReleaseCategory::class)
        ->fillForm([
            'name' => 'Breaking News',
        ])
        ->assertFormSet([
            'slug' => 'breaking-news',
        ]);
});

test('can create press release category with an english name', function () {
    livewire(CreatePressReleaseCategory::class)
        ->fillForm([
            'name' => '中文分類',
            'name_en' => 'English Category',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $this->assertDatabaseHas('press_release_categories', [
        'name' => '中文分類',
        'name_en' => 'English Category',
    ]);
});

test('can update press release category english name', function () {
    $category = PressReleaseCategory::factory()->create(['name_en' => null]);

    livewire(EditPressReleaseCategory::class, ['record' => $category->getRouteKey()])
        ->fillForm(['name_en' => 'Updated English'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($category->refresh()->name_en)->toBe('Updated English');
});

test('cannot create press release category with missing name', function () {
    livewire(CreatePressReleaseCategory::class)
        ->fillForm(['name' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required']);
});

test('cannot create press release category with duplicate name', function () {
    $existing = PressReleaseCategory::factory()->create();

    livewire(CreatePressReleaseCategory::class)
        ->fillForm(['name' => $existing->name])
        ->call('create')
        ->assertHasFormErrors(['name' => 'unique']);
});

test('can render edit page', function () {
    $category = PressReleaseCategory::factory()->create();

    $this->get(PressReleaseCategoryResource::getUrl('edit', ['record' => $category]))->assertSuccessful();
});

test('can update press release category', function () {
    $category = PressReleaseCategory::factory()->create();
    $newData = PressReleaseCategory::factory()->make();

    livewire(EditPressReleaseCategory::class, ['record' => $category->getRouteKey()])
        ->fillForm(['name' => $newData->name])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($category->refresh()->name)->toBe($newData->name);
});

test('can delete press release category that has no press releases', function () {
    $category = PressReleaseCategory::factory()->create();

    livewire(ListPressReleaseCategories::class)
        ->callTableAction('delete', $category);

    $this->assertModelMissing($category);
});

test('cannot delete press release category that is in use', function () {
    $category = PressReleaseCategory::factory()->create();
    PressRelease::factory()->create(['press_release_category_id' => $category->id]);

    livewire(ListPressReleaseCategories::class)
        ->callTableAction('delete', $category)
        ->assertNotified();

    $this->assertModelExists($category);
});
