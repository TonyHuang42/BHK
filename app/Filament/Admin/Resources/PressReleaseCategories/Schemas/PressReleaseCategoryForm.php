<?php

namespace App\Filament\Admin\Resources\PressReleaseCategories\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class PressReleaseCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name (Chinese)')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug(Pinyin::permalink($state ?? '')))),
                TextInput::make('name_en')
                    ->label('Name (English)')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Hidden::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
            ]);
    }
}
