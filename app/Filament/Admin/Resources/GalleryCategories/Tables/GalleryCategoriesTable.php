<?php

namespace App\Filament\Admin\Resources\GalleryCategories\Tables;

use App\Models\GalleryCategory;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class GalleryCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('galleries_count')
                    ->label('Galleries')
                    ->counts('galleries')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
            ])
            ->filters([])
            ->recordActions([
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->before(function (DeleteBulkAction $action, Collection $records) {
                            foreach ($records as $record) {
                                if ($record->galleries()->exists()) {
                                    Notification::make()
                                        ->danger()
                                        ->title('Cannot delete category')
                                        ->body("'{$record->name}' is assigned to {$record->galleries()->count()} gallery(ies) and cannot be deleted.")
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
