<?php

namespace App\Filament\Admin\Resources\GalleryImages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
// use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

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
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
