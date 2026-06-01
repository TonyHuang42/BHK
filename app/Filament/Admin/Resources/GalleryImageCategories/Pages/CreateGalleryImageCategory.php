<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Pages;

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGalleryImageCategory extends CreateRecord
{
    protected static string $resource = GalleryImageCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
