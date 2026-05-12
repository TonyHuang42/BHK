<?php

namespace App\Filament\Admin\Resources\PressReleases\Pages;

use App\Filament\Admin\Resources\PressReleaseCategories\PressReleaseCategoryResource;
use App\Filament\Admin\Resources\PressReleases\PressReleaseResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListPressReleases extends ListRecords
{
    protected static string $resource = PressReleaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('manageCategories')
                ->label('Manage Categories')
                ->icon(Heroicon::OutlinedRectangleStack)
                ->url(fn () => PressReleaseCategoryResource::getUrl('index')),
            CreateAction::make(),
        ];
    }
}
