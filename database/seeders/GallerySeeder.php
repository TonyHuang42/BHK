<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    /** @var array<int, array{title: string, slug: string, date: string, imageCount: int}> */
    private array $albums = [
        ['title' => '香港保衛戰珍貴影像', 'slug' => 'battle-of-hong-kong-images', 'date' => '2024-12-08', 'imageCount' => 5],
        ['title' => '日治時期街道紀實', 'slug' => 'japanese-occupation-streets', 'date' => '2024-11-15', 'imageCount' => 4],
        ['title' => '港九大隊游擊戰士', 'slug' => 'hk-kowloon-brigade-fighters', 'date' => '2024-10-01', 'imageCount' => 6],
        ['title' => '戰後重建香港', 'slug' => 'postwar-reconstruction', 'date' => '2024-09-18', 'imageCount' => 3],
        ['title' => '民間互助與救援', 'slug' => 'civilian-mutual-aid-and-rescue', 'date' => '2024-08-05', 'imageCount' => 4],
        ['title' => '抗戰人物肖像集', 'slug' => 'resistance-portraits', 'date' => '2024-07-20', 'imageCount' => 5],
    ];

    public function run(): void
    {
        $defaultCategory = GalleryCategory::firstOrCreate(
            ['slug' => 'general'],
            ['name' => 'General']
        );

        Storage::disk('public')->makeDirectory('galleries/featured-images');
        Storage::disk('public')->makeDirectory('galleries');

        foreach ($this->albums as $index => $album) {
            $featuredImagePath = $this->downloadImage(
                "https://picsum.photos/seed/bhk-featured-{$index}/800/800",
                "galleries/featured-images/seed-{$index}.jpg"
            );

            $images = [];
            for ($i = 0; $i < $album['imageCount']; $i++) {
                $images[] = $this->downloadImage(
                    "https://picsum.photos/seed/bhk-img-{$index}-{$i}/1200/900",
                    "galleries/seed-{$index}-{$i}.jpg"
                );
            }

            Gallery::create([
                'gallery_category_id' => $defaultCategory->id,
                'title' => $album['title'],
                'slug' => $album['slug'],
                'date' => $album['date'],
                'is_publish' => true,
                'featured_image' => $featuredImagePath,
                'images' => $images,
            ]);
        }
    }

    private function downloadImage(string $url, string $storagePath): string
    {
        $response = Http::timeout(15)->get($url);

        Storage::disk('public')->put($storagePath, $response->body());

        return $storagePath;
    }
}
