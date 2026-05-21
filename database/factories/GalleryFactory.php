<?php

namespace Database\Factories;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence();

        return [
            'gallery_category_id' => GalleryCategory::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'date' => $this->faker->date(),
            'is_publish' => $this->faker->boolean(),
            'featured_image' => '',
            'images' => [],
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function (Gallery $gallery) {
            $dir = "galleries/{$gallery->id}";
            $needsSave = false;

            if ($gallery->featured_image === '') {
                $gallery->featured_image = "{$dir}/".fake()->uuid().'.jpg';
                $needsSave = true;
            }

            if (empty($gallery->images)) {
                $makeImage = function () use ($dir): array {
                    $filename = fake()->uuid();

                    return [
                        'path' => "{$dir}/{$filename}.jpg",
                        'caption' => '',
                        'thumbnail' => "{$dir}/{$filename}-thumb.jpg",
                    ];
                };

                $gallery->images = [$makeImage(), $makeImage()];
                $needsSave = true;
            }

            if ($needsSave) {
                $gallery->saveQuietly();
            }
        });
    }
}
