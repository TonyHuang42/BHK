<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Pages;

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use App\Models\GalleryImageCategory;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryImageCategory extends CreateRecord
{
    protected static string $resource = GalleryImageCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    /**
     * Append new categories to the end of the reorderable list.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['sort_order'] = (int) GalleryImageCategory::max('sort_order') + 1;

        return $data;
    }
}
