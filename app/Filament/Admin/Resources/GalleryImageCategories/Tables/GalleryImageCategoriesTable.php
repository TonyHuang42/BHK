<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Tables;

use App\Models\GalleryImageCategory;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class GalleryImageCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('images_count')
                    ->label('Images')
                    ->counts('images')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
            ])
            ->filters([])
            ->recordActions([
                EditAction::make(),
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->before(function (DeleteBulkAction $action, Collection $records) {
                            foreach ($records as $record) {
                                if ($record->images()->exists()) {
                                    Notification::make()
                                        ->danger()
                                        ->title('Cannot delete category')
                                        ->body("'{$record->name}' is assigned to {$record->images()->count()} image(s) and cannot be deleted.")
                                        ->send();

                                    $action->cancel();

                                    return;
                                }
                            }
                        }),
                ]),
            ]);
    }
}
