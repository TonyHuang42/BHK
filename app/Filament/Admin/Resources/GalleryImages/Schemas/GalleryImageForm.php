<?php

namespace App\Filament\Admin\Resources\GalleryImages\Schemas;

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
                Textarea::make('caption')
                    ->autosize(),
                Select::make('categories')
                    ->required()
                    ->label('Categories')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->multiple()
                    ->preload(),
                Toggle::make('is_publish')
                    ->required()
                    ->inline(false)
                    ->label('Publish')
                    ->default(true),
            ]);
    }
}
