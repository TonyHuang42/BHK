<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Pages;

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGalleryImageCategories extends ListRecords
{
    protected static string $resource = GalleryImageCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
