<?php

namespace App\Filament\Admin\Resources\Galleries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Livewire\Component as Livewire;
use Overtrue\Pinyin\Pinyin;

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
                    ->default(true),
                FileUpload::make('featured_image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory(fn (?Model $record, Livewire $livewire): string => $record
                        ? "galleries/{$record->id}"
                        : "galleries/temp-{$livewire->getId()}"
                    )
                    ->columnSpanFull(),
                Repeater::make('images')
                    ->required()
                    ->columnSpanFull()
                    ->reorderable()
                    ->itemLabel(fn (array $state): ?string => $state['caption'] ?: null)
                    ->addActionLabel('Add Image')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('path')
                            ->label('Image')
                            ->required()
                            ->image()
                            ->preserveFilenames()
                            ->disk('public')
                            ->directory(fn (?Model $record, Livewire $livewire): string => $record
                                ? "galleries/{$record->id}"
                                : "galleries/temp-{$livewire->getId()}"
                            )
                            ->visibility('public'),
                        Textarea::make('caption')
                            ->autosize(),
                    ]),
            ]);
    }
}
