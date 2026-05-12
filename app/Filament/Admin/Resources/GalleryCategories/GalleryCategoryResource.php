<?php

namespace App\Filament\Admin\Resources\GalleryCategories;

use App\Filament\Admin\Resources\GalleryCategories\Pages\CreateGalleryCategory;
use App\Filament\Admin\Resources\GalleryCategories\Pages\EditGalleryCategory;
use App\Filament\Admin\Resources\GalleryCategories\Pages\ListGalleryCategories;
use App\Filament\Admin\Resources\GalleryCategories\Schemas\GalleryCategoryForm;
use App\Filament\Admin\Resources\GalleryCategories\Tables\GalleryCategoriesTable;
use App\Models\GalleryCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GalleryCategoryResource extends Resource
{
    protected static ?string $model = GalleryCategory::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return GalleryCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalleryCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryCategories::route('/'),
            'create' => CreateGalleryCategory::route('/create'),
            'edit' => EditGalleryCategory::route('/{record}/edit'),
        ];
    }
}
