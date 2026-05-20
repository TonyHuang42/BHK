<?php

namespace App\Filament\Admin\Resources\Galleries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Hidden::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                DatePicker::make('date')
                    ->default(now())
                    ->timezone('America/Vancouver')
                    ->native(false)
                    ->displayFormat('Y-m-d')
                    ->required(),
                Select::make('gallery_category_id')
                    ->label('Category')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->required()
                    ->preload()
                    ->searchable(),
                Toggle::make('is_publish')
                    ->inline(false)
                    ->required()
                    ->label('Publish')
                    ->default(false),
                FileUpload::make('featured_image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('galleries/featured-images')
                    ->columnSpanFull(),
                FileUpload::make('images')
                    ->required()
                    ->columnSpanFull()
                    ->multiple()
                    ->panelLayout('grid')
                    ->reorderable()
                    ->appendFiles()
                    ->image()
                    ->preserveFilenames()
                    ->disk('public')
                    ->directory('galleries')
                    ->visibility('public'),
            ]);
    }
}
