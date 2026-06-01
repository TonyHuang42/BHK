<?php

namespace Database\Seeders;

use App\Models\GalleryImage;
use App\Models\GalleryImageCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GalleryImageSeeder extends Seeder
{
    /** @var array<string, string> Map of slug => display name */
    private array $categories = [
        'battle-of-hong-kong' => '香港保衛戰',
        'japanese-occupation' => '日治時期',
        'guerrilla-fighters' => '游擊戰士',
        'postwar-reconstruction' => '戰後重建',
        'civilian-rescue' => '民間救援',
    ];

    /** @var array<int, string> */
    private array $captions = [
        '香港保衛戰珍貴影像',
        '日治時期街道紀實',
        '港九大隊游擊戰士',
        '戰後重建香港',
        '民間互助與救援',
        '抗戰人物肖像集',
    ];

    public function run(): void
    {
        $categories = collect($this->categories)->map(
            fn (string $name, string $slug): GalleryImageCategory => GalleryImageCategory::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name],
            )
        )->values();

        Storage::disk('public')->makeDirectory('galleries/images');

        for ($i = 0; $i < 18; $i++) {
            $imagePath = $this->downloadImage(
                "https://picsum.photos/seed/bhk-gallery-image-{$i}/1200/900",
                "galleries/images/seed-{$i}.jpg",
            );

            $image = GalleryImage::create([
                'is_publish' => $i % 5 !== 0,
                'image_url' => $imagePath,
                'caption' => $this->captions[$i % count($this->captions)],
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
