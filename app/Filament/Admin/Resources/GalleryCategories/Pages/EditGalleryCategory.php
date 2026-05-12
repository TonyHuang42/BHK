<?php

namespace App\Filament\Admin\Resources\GalleryCategories\Pages;

use App\Filament\Admin\Resources\GalleryCategories\GalleryCategoryResource;
use App\Models\GalleryCategory;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditGalleryCategory extends EditRecord
{
    protected static string $resource = GalleryCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function (DeleteAction $action, GalleryCategory $record) {
                    if ($record->galleries()->exists()) {
                        Notification::make()
                            ->danger()
                            ->title('Cannot delete category')
                            ->body("'{$record->name}' is assigned to {$record->galleries()->count()} galleries and cannot be deleted.")
                            ->send();

                        $action->cancel();
                    }
                }),
        ];
    }
}
