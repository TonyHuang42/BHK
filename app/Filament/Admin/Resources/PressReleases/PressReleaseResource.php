<?php

namespace App\Filament\Admin\Resources\PressReleases;

use App\Filament\Admin\Resources\PressReleases\Pages\CreatePressRelease;
use App\Filament\Admin\Resources\PressReleases\Pages\EditPressRelease;
use App\Filament\Admin\Resources\PressReleases\Pages\ListPressReleases;
use App\Filament\Admin\Resources\PressReleases\Schemas\PressReleaseForm;
use App\Filament\Admin\Resources\PressReleases\Tables\PressReleasesTable;
use App\Models\PressRelease;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PressReleaseResource extends Resource
{
    protected static ?string $model = PressRelease::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = null;

    public static function form(Schema $schema): Schema
    {
        return PressReleaseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PressReleasesTable::configure($table);
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
            'index' => ListPressReleases::route('/'),
            'create' => CreatePressRelease::route('/create'),
            'edit' => EditPressRelease::route('/{record}/edit'),
        ];
    }
}
