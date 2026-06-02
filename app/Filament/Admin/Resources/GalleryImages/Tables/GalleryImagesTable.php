<?php

namespace App\Filament\Admin\Resources\GalleryImages\Tables;

use App\Filament\Admin\Resources\GalleryImages\Pages\ListGalleryImages;
use App\Models\GalleryImageCategory;
use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
// use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms\Components\Select;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;

class GalleryImagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail_url')
                    ->label('Image')
                    ->disk('public'),
                TextColumn::make('caption')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('categories.name')
                    ->label('Categories')
                    ->badge(),
                ToggleColumn::make('is_publish')
                    ->label('Published'),
                // TextColumn::make('created_at')
                //     ->date()
                //     ->sortable(),
            ])
            ->filters([
                SelectFilter::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple()
                    ->preload(),
            ])
            // ->recordActions([
            //     EditAction::make(),
            // ])
            ->reorderable('sort_order', condition: fn (ListGalleryImages $livewire): bool => blank($livewire->getTableFilterState('categories')['values'] ?? null) && blank($livewire->getTableSearch()))
            ->defaultSort('sort_order')
            ->toolbarActions([
                BulkActionGroup::make([
                    BulkAction::make('assignCategories')
                        ->label('Assign categories')
                        ->icon(Heroicon::Tag)
                        ->schema([
                            Select::make('categories')
                                ->label('Categories')
                                ->options(fn (): array => GalleryImageCategory::query()->pluck('name', 'id')->all())
                                ->multiple()
                                ->preload()
                                ->required(),
                        ])
                        ->action(function (array $data, Collection $records): void {
                            foreach ($records as $record) {
                                $record->categories()->sync($data['categories']);
                            }
                        })
                        ->deselectRecordsAfterCompletion()
                        ->successNotificationTitle('Categories assigned'),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
