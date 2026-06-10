<?php

namespace App\Filament\Admin\Resources\GalleryImageCategories\Schemas;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class GalleryImageCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label('Name (Chinese)')
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug(Pinyin::permalink($state ?? '')))),
                TextInput::make('name_en')
                    ->required()
                    ->label('Name (English)')
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Hidden::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
            ]);
    }
}
