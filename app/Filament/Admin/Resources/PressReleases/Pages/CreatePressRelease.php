<?php

namespace App\Filament\Admin\Resources\PressReleases\Pages;

use App\Filament\Admin\Resources\PressReleases\PressReleaseResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePressRelease extends CreateRecord
{
    protected static string $resource = PressReleaseResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
