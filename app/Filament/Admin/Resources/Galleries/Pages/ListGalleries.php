<?php

namespace App\Filament\Admin\Resources\Galleries\Pages;

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Filament\Admin\Resources\GalleryCategories\GalleryCategoryResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('manageCategories')
                ->label('Manage Categories')
                ->icon(Heroicon::OutlinedRectangleStack)
                ->url(fn () => GalleryCategoryResource::getUrl('index')),
            CreateAction::make(),
        ];
    }
}
