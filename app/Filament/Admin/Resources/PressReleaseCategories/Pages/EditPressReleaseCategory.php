<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories\Pages;

use App\Filament\Admin\Resources\PressReleaseCategories\PressReleaseCategoryResource;
use App\Models\PressReleaseCategory;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPressReleaseCategory extends EditRecord
{
    protected static string $resource = PressReleaseCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function (DeleteAction $action, PressReleaseCategory $record) {
                    if ($record->pressReleases()->exists()) {
                        Notification::make()
                            ->danger()
                            ->title('Cannot delete category')
                            ->body("'{$record->name}' is assigned to {$record->pressReleases()->count()} press releases and cannot be deleted.")
                            ->send();

                        $action->cancel();
                    }
                }),
        ];
    }
}
