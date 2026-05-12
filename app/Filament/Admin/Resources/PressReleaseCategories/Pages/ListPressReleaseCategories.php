<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories\Pages;

use App\Filament\Admin\Resources\PressReleaseCategories\PressReleaseCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPressReleaseCategories extends ListRecords
{
    protected static string $resource = PressReleaseCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
