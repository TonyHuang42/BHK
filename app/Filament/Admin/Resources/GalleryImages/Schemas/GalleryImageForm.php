<?php

namespace App\Filament\Admin\Resources\GalleryImages\Schemas;

use App\Models\GalleryImageCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class GalleryImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image_url')
                    ->label('Image')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->visibility('public')
                    ->directory('galleries/images')
                    ->getUploadedFileNameForStorageUsing(function (UploadedFile $file): string {
                        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

                        return $name.'-'.Str::random(6).'.'.$file->getClientOriginalExtension();
                    }),
                Select::make('categories')
                    ->required()
                    ->label('Categories')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->getOptionLabelFromRecordUsing(fn (GalleryImageCategory $record): string => filled($record->name_en) ? "{$record->name} / {$record->name_en}" : $record->name)
                    ->multiple()
                    ->searchable(['name', 'name_en'])
                    ->preload(),
                Textarea::make('caption')
                    ->label('Caption (Chinese)')
                    ->autosize(),
                Textarea::make('caption_en')
                    ->label('Caption (English)')
                    ->autosize(),
                Toggle::make('is_publish')
                    ->required()
                    ->inline(false)
                    ->label('Publish')
                    ->default(true),
            ]);
    }
}
