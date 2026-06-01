<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories;

use App\Filament\Admin\Resources\GalleryImageCategories\Pages\CreateGalleryImageCategory;
use App\Filament\Admin\Resources\GalleryImageCategories\Pages\EditGalleryImageCategory;
use App\Filament\Admin\Resources\GalleryImageCategories\Pages\ListGalleryImageCategories;
use App\Filament\Admin\Resources\GalleryImageCategories\Schemas\GalleryImageCategoryForm;
use App\Filament\Admin\Resources\GalleryImageCategories\Tables\GalleryImageCategoriesTable;
use App\Models\GalleryImageCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GalleryImageCategoryResource extends Resource
{
    protected static ?string $model = GalleryImageCategory::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return GalleryImageCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryImageCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryImageCategories::route('/'),
            'create' => CreateGalleryImageCategory::route('/create'),
            'edit' => EditGalleryImageCategory::route('/{record}/edit'),
        ];
    }
}
