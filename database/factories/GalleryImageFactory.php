<?php

namespace Database\Factories;

use App\Models\GalleryImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GalleryImage>
 */
class GalleryImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $filename = fake()->uuid();

        return [
            'is_publish' => true,
            'image_url' => "galleries/images/{$filename}.jpg",
            'thumbnail_url' => "galleries/thumbnails/{$filename}-thumb.jpg",
            'caption' => fake()->optional()->sentence(),
        ];
    }

    public function published(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_publish' => true,
        ]);
    }

    public function unpublished(): static
    {
        return $this->state(fn (array $attributes): array => [
            'is_publish' => false,
        ]);
    }
}
