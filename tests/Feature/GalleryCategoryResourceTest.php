<?php

use App\Filament\Admin\Resources\GalleryCategories\GalleryCategoryResource;
use App\Filament\Admin\Resources\GalleryCategories\Pages\CreateGalleryCategory;
use App\Filament\Admin\Resources\GalleryCategories\Pages\EditGalleryCategory;
use App\Filament\Admin\Resources\GalleryCategories\Pages\ListGalleryCategories;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

test('can list gallery categories', function () {
    $categories = GalleryCategory::factory()->count(5)->create();

    livewire(ListGalleryCategories::class)
        ->assertCanSeeTableRecords($categories)
        ->assertSuccessful();
});

test('can render create page', function () {
    $this->get(GalleryCategoryResource::getUrl('create'))->assertSuccessful();
});

test('can create gallery category', function () {
    $newData = GalleryCategory::factory()->make();

    livewire(CreateGalleryCategory::class)
        ->fillForm([
            'name' => $newData->name,
        ])
        ->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $this->assertDatabaseHas('gallery_categories', [
        'name' => $newData->name,
        'slug' => $newData->slug,
    ]);
});

test('generates slug from name', function () {
    livewire(CreateGalleryCategory::class)
        ->fillForm([
            'name' => 'Nature Photography',
        ])
        ->assertFormSet([
            'slug' => 'nature-photography',
        ]);
});

test('cannot create gallery category with missing name', function () {
    livewire(CreateGalleryCategory::class)
        ->fillForm(['name' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required']);
});

test('cannot create gallery category with duplicate name', function () {
    $existing = GalleryCategory::factory()->create();

    livewire(CreateGalleryCategory::class)
        ->fillForm(['name' => $existing->name])
        ->call('create')
        ->assertHasFormErrors(['name' => 'unique']);
});

test('can render edit page', function () {
    $category = GalleryCategory::factory()->create();

    $this->get(GalleryCategoryResource::getUrl('edit', ['record' => $category]))->assertSuccessful();
});

test('can update gallery category', function () {
    $category = GalleryCategory::factory()->create();
    $newData = GalleryCategory::factory()->make();

    livewire(EditGalleryCategory::class, ['record' => $category->getRouteKey()])
        ->fillForm(['name' => $newData->name])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($category->refresh()->name)->toBe($newData->name);
});

test('can delete gallery category that has no galleries', function () {
    $category = GalleryCategory::factory()->create();

    livewire(ListGalleryCategories::class)
        ->callTableAction('delete', $category);

    $this->assertModelMissing($category);
});

test('cannot delete gallery category that is in use', function () {
    $category = GalleryCategory::factory()->create();
    $gallery = Gallery::factory()->create();
    $gallery->categories()->sync([$category->id]);

    livewire(ListGalleryCategories::class)
        ->callTableAction('delete', $category)
        ->assertNotified();

    $this->assertModelExists($category);
});
