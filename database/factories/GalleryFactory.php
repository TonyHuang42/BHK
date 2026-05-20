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
            'featured_image' => 'galleries/featured-images/'.$this->faker->uuid().'.jpg',
            'images' => [
                'galleries/'.$this->faker->uuid().'.jpg',
                'galleries/'.$this->faker->uuid().'.jpg',
            ],
        ];
    }
}
