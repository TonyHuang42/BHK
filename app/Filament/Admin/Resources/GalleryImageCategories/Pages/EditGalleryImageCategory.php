<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Pages;

use App\Filament\Admin\Resources\GalleryImageCategories\GalleryImageCategoryResource;
use App\Models\GalleryImageCategory;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditGalleryImageCategory extends EditRecord
{
    protected static string $resource = GalleryImageCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function (DeleteAction $action, GalleryImageCategory $record) {
                    if ($record->images()->exists()) {
                        Notification::make()
                            ->danger()
                            ->title('Cannot delete category')
                            ->body("'{$record->name}' is assigned to {$record->images()->count()} image(s) and cannot be deleted.")
                            ->send();

                        $action->cancel();
                    }
                }),
        ];
    }
}
