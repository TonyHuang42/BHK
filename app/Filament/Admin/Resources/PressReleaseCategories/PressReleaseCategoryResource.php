<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories;

use App\Filament\Admin\Resources\PressReleaseCategories\Pages\CreatePressReleaseCategory;
use App\Filament\Admin\Resources\PressReleaseCategories\Pages\EditPressReleaseCategory;
use App\Filament\Admin\Resources\PressReleaseCategories\Pages\ListPressReleaseCategories;
use App\Filament\Admin\Resources\PressReleaseCategories\Schemas\PressReleaseCategoryForm;
use App\Filament\Admin\Resources\PressReleaseCategories\Tables\PressReleaseCategoriesTable;
use App\Models\PressReleaseCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PressReleaseCategoryResource extends Resource
{
    protected static ?string $model = PressReleaseCategory::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PressReleaseCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PressReleaseCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPressReleaseCategories::route('/'),
            'create' => CreatePressReleaseCategory::route('/create'),
            'edit' => EditPressReleaseCategory::route('/{record}/edit'),
        ];
    }
}
