<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories\Pages;

use App\Filament\Admin\Resources\PressReleaseCategories\PressReleaseCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePressReleaseCategory extends CreateRecord
{
    protected static string $resource = PressReleaseCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
