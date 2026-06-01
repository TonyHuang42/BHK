<?php

use App\Filament\Admin\Resources\PressReleases\Pages\CreatePressRelease;
use App\Filament\Admin\Resources\PressReleases\Pages\EditPressRelease;
use App\Filament\Admin\Resources\PressReleases\Pages\ListPressReleases;
use App\Filament\Admin\Resources\PressReleases\PressReleaseResource;
use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use App\Models\User;
use Filament\Actions\DeleteAction;
use Illuminate\Foundation\Testing\RefreshDatabase;

// use function Pest\Livewire\livewire;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

test('can list press releases', function () {
    $pressReleases = PressRelease::factory()->count(5)->create();

    livewire(ListPressReleases::class)
        ->assertCanSeeTableRecords($pressReleases)
        ->assertSuccessful();
});

test('can filter press releases by category', function () {
    $categoryA = PressReleaseCategory::factory()->create();
    $categoryB = PressReleaseCategory::factory()->create();

    $pressReleasesA = PressRelease::factory()->count(3)->for($categoryA, 'category')->create();
    $pressReleasesB = PressRelease::factory()->count(2)->for($categoryB, 'category')->create();

    livewire(ListPressReleases::class)
        ->filterTable('category', $categoryA->id)
        ->assertCanSeeTableRecords($pressReleasesA)
        ->assertCanNotSeeTableRecords($pressReleasesB);
});

test('can render create page', function () {
    $this->get(PressReleaseResource::getUrl('create'))->assertSuccessful();
});

test('can create press release', function () {
    $category = PressReleaseCategory::factory()->create();
    $newData = PressRelease::factory()->make();

    livewire(CreatePressRelease::class)
        ->fillForm([
            'press_release_category_id' => $category->id,
            'title' => $newData->title,
            'summary' => $newData->summary,
            'date' => $newData->date->format('Y-m-d'),
            'body' => $newData->body,
            'is_publish' => $newData->is_publish,
        ])
        ->call('create')
        ->assertHasNoFormErrors()
        ->assertRedirect();

    $this->assertDatabaseHas('press_releases', [
        'title' => $newData->title,
        'press_release_category_id' => $category->id,
    ]);
});

test('cannot create press release without category', function () {
    livewire(CreatePressRelease::class)
        ->fillForm(['press_release_category_id' => null])
        ->call('create')
        ->assertHasFormErrors(['press_release_category_id' => 'required']);
});

test('cannot create press release with missing required fields', function () {
    livewire(CreatePressRelease::class)
        ->fillForm([
            'title' => null,
            'summary' => null,
            'date' => null,
        ])
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'required',
            'summary' => 'required',
            'date' => 'required',
        ]);
});

test('cannot create press release with duplicate title', function () {
    $existing = PressRelease::factory()->create();

    livewire(CreatePressRelease::class)
        ->fillForm([
            'title' => $existing->title,
        ])
        ->call('create')
        ->assertHasFormErrors([
            'title' => 'unique',
        ]);
});

test('generates slug from title', function () {
    livewire(CreatePressRelease::class)
        ->fillForm([
            'title' => 'Test Press Release',
        ])
        ->assertFormSet([
            'slug' => 'test-press-release',
        ]);
});

test('can render edit page', function () {
    $pressRelease = PressRelease::factory()->create();

    $this->get(PressReleaseResource::getUrl('edit', ['record' => $pressRelease]))->assertSuccessful();
});

test('can update press release', function () {
    $pressRelease = PressRelease::factory()->create();
    $newData = PressRelease::factory()->make();

    livewire(EditPressRelease::class, [
        'record' => $pressRelease->getRouteKey(),
    ])
        ->fillForm([
            'title' => $newData->title,
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($pressRelease->refresh()->title)->toBe($newData->title);
});

test('can delete press release', function () {
    $pressRelease = PressRelease::factory()->create();

    livewire(EditPressRelease::class, ['record' => $pressRelease->getRouteKey()])
        ->callAction(DeleteAction::class);

    $this->assertModelMissing($pressRelease);
});
