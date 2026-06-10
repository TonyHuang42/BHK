<?php

namespace App\Filament\Admin\Resources\PressReleases\Pages;

use App\Filament\Admin\Resources\PressReleases\PressReleaseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPressRelease extends EditRecord
{
    protected static string $resource = PressReleaseResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? static::getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
