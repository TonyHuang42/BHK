<?php

namespace App\Filament\Admin\Resources\Galleries\Pages;

use App\Filament\Admin\Resources\Galleries\GalleryResource;
use App\Models\Gallery;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
        /** @var Gallery $record */
        $record = $this->getRecord();
        $targetDir = "galleries/{$record->id}";
        $needsUpdate = false;

        Storage::disk('public')->makeDirectory($targetDir);

        $featuredImage = $record->featured_image;

        if ($featuredImage && str_starts_with($featuredImage, 'galleries/temp-')) {
            $newPath = $targetDir.'/'.basename($featuredImage);
            Storage::disk('public')->move($featuredImage, $newPath);
            $record->featured_image = $newPath;
            $needsUpdate = true;
        }

        $images = is_array($record->images) ? $record->images : [];
        $updatedImages = [];

        foreach ($images as $item) {
            if (! empty($item['path']) && str_starts_with($item['path'], 'galleries/temp-')) {
                $newPath = $targetDir.'/'.basename($item['path']);
                Storage::disk('public')->move($item['path'], $newPath);
                $item['path'] = $newPath;
                $needsUpdate = true;
            }

            if (! empty($item['thumbnail']) && str_starts_with($item['thumbnail'], 'galleries/temp-')) {
                $newThumbPath = $targetDir.'/'.basename($item['thumbnail']);
                Storage::disk('public')->move($item['thumbnail'], $newThumbPath);
                $item['thumbnail'] = $newThumbPath;
                $needsUpdate = true;
            }

            $updatedImages[] = $item;
        }

        if ($needsUpdate) {
            $record->images = $updatedImages;
            $record->saveQuietly();
        }
    }
}
