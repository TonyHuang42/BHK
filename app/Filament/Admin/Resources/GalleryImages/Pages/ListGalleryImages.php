<?php

namespace App\Filament\Admin\Resources\GalleryImages\Pages;

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use App\Filament\Admin\Resources\GalleryImages\GalleryImageResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListGalleryImages extends ListRecords
{
    protected static string $resource = GalleryImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('manageCategories')
                ->label('Manage Categories')
                ->icon(Heroicon::OutlinedRectangleStack)
                ->url(fn () => GalleryImageCategoryResource::getUrl('index')),
            CreateAction::make()
                ->label('New Image')
                ->icon(Heroicon::OutlinedPlus),
        ];
    }
}
