<?php

namespace App\Filament\Admin\Resources\PressReleases\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class PressReleaseForm
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
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug(Pinyin::permalink($state ?? '')))),
                Hidden::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),
                DatePicker::make('date')
                    ->default(now())
                    ->timezone('America/Vancouver')
                    ->native(false)
                    ->displayFormat('Y-m-d')
                    ->required(),
                Select::make('press_release_category_id')
                    ->label('Category')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->required()
                    ->preload()
                    ->searchable(),
                Toggle::make('is_publish')
                    ->required()
                    ->label('Publish')
                    ->default(false),
                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('press-releases/featured-images')
                    ->columnSpanFull(),
                Textarea::make('summary')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('body')
                    ->required()
                    ->fileAttachmentsDirectory('press-releases/attachments')
                    ->columnSpanFull(),
            ]);
    }
}
