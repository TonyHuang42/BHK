<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GalleryImageSeeder extends Seeder
{
    /** @var array<string, array{name: string, name_en: string}> Map of slug => names */
    private array $categories = [
        'battle-of-hong-kong' => ['name' => '香港保衛戰', 'name_en' => 'Battle of Hong Kong'],
        'japanese-occupation' => ['name' => '日治時期', 'name_en' => 'Japanese Occupation'],
        'guerrilla-fighters' => ['name' => '游擊戰士', 'name_en' => 'Guerrilla Fighters'],
        'postwar-reconstruction' => ['name' => '戰後重建', 'name_en' => 'Postwar Reconstruction'],
        'civilian-rescue' => ['name' => '民間救援', 'name_en' => 'Civilian Rescue'],
    ];

    /** @var array<int, array{caption: string, caption_en: string}> */
    private array $captions = [
        ['caption' => '香港保衛戰珍貴影像', 'caption_en' => 'Precious Images of the Battle of Hong Kong'],
        ['caption' => '日治時期街道紀實', 'caption_en' => 'Street Scenes During the Japanese Occupation'],
        ['caption' => '港九大隊游擊戰士', 'caption_en' => 'Guerrilla Fighters of the Hong Kong-Kowloon Brigade'],
        ['caption' => '戰後重建香港', 'caption_en' => 'Rebuilding Postwar Hong Kong'],
        ['caption' => '民間互助與救援', 'caption_en' => 'Civilian Mutual Aid and Rescue'],
        ['caption' => '抗戰人物肖像集', 'caption_en' => 'Portraits of Wartime Figures'],
    ];

    public function run(): void
    {
        $categories = collect($this->categories)->map(
            fn (array $names, string $slug): GalleryImageCategory => GalleryImageCategory::firstOrCreate(
                ['slug' => $slug],
                ['name' => $names['name'], 'name_en' => $names['name_en']],
            )
        )->values();

        Storage::disk('public')->makeDirectory('galleries/images');

        for ($i = 0; $i < 18; $i++) {
            $imagePath = $this->downloadImage(
                "https://picsum.photos/seed/bhk-gallery-image-{$i}/1200/900",
                "galleries/images/seed-{$i}.jpg",
            );

            $caption = $this->captions[$i % count($this->captions)];

            $image = GalleryImage::create([
                'is_publish' => $i % 5 !== 0,
                'image_url' => $imagePath,
                'caption' => $caption['caption'],
                'caption_en' => $caption['caption_en'],
            ]);

            $image->categories()->attach(
                $categories->random(rand(1, 2))->pluck('id')->all()
            );
        }
    }

    private function downloadImage(string $url, string $storagePath): string
    {
        $response = Http::timeout(15)->get($url);

        Storage::disk('public')->put($storagePath, $response->body());

        return $storagePath;
    }
}
