<?php

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use App\Filament\Admin\Resources\GalleryImageCategories\Pages\CreateGalleryImageCategory;
use App\Filament\Admin\Resources\GalleryImageCategories\Pages\EditGalleryImageCategory;
use App\Filament\Admin\Resources\GalleryImageCategories\Pages\ListGalleryImageCategories;
use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

test('can list gallery image categories', function () {
    $categories = GalleryImageCategory::factory()->count(5)->create();

    livewire(ListGalleryImageCategories::class)
        ->assertCanSeeTableRecords($categories)
        ->assertSuccessful();
});

test('can render create page', function () {
    $this->get(GalleryImageCategoryResource::getUrl('create'))->assertSuccessful();
});

test('can create a gallery image category', function () {
    $newData = GalleryImageCategory::factory()->make();

    livewire(CreateGalleryImageCategory::class)
        ->fillForm(['name' => $newData->name])
        ->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $this->assertDatabaseHas('gallery_image_categories', [
        'name' => $newData->name,
        'slug' => $newData->slug,
    ]);
});

test('generates slug from name', function () {
    livewire(CreateGalleryImageCategory::class)
        ->fillForm(['name' => 'Nature Photography'])
        ->assertFormSet(['slug' => 'nature-photography']);
});

test('cannot create a gallery image category with missing name', function () {
    livewire(CreateGalleryImageCategory::class)
        ->fillForm(['name' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required']);
});

test('cannot create a gallery image category with duplicate name', function () {
    $existing = GalleryImageCategory::factory()->create();

    livewire(CreateGalleryImageCategory::class)
        ->fillForm(['name' => $existing->name])
        ->call('create')
        ->assertHasFormErrors(['name' => 'unique']);
});

test('can update a gallery image category', function () {
    $category = GalleryImageCategory::factory()->create();
    $newData = GalleryImageCategory::factory()->make();

    livewire(EditGalleryImageCategory::class, ['record' => $category->getRouteKey()])
        ->fillForm(['name' => $newData->name])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($category->refresh()->name)->toBe($newData->name);
});

test('can delete a gallery image category that has no images', function () {
    $category = GalleryImageCategory::factory()->create();

    livewire(ListGalleryImageCategories::class)
        ->callTableAction('delete', $category);

    $this->assertModelMissing($category);
});

test('cannot delete a gallery image category that is in use', function () {
    $category = GalleryImageCategory::factory()->create();
    $image = GalleryImage::factory()->create();
    $image->categories()->sync([$category->id]);

    livewire(ListGalleryImageCategories::class)
        ->callTableAction('delete', $category)
        ->assertNotified();

    $this->assertModelExists($category);
});
