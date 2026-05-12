<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories\Tables;

use App\Models\PressReleaseCategory;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;

class PressReleaseCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('press_releases_count')
                    ->label('Press Releases')
                    ->counts('pressReleases')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->date()
                    ->sortable(),
            ])
            ->filters([])
            ->recordActions([
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
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->before(function (DeleteBulkAction $action, Collection $records) {
                            foreach ($records as $record) {
                                if ($record->pressReleases()->exists()) {
                                    Notification::make()
                                        ->danger()
                                        ->title('Cannot delete category')
                                        ->body("'{$record->name}' is assigned to {$record->pressReleases()->count()} press releases and cannot be deleted.")
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
