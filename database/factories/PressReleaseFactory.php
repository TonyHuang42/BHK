<?php

namespace Database\Factories;

use App\Models\PressRelease;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<PressRelease>
 */
class PressReleaseFactory extends Factory
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
            'title' => $title,
            'slug' => Str::slug($title),
            'summary' => $this->faker->paragraph(),
            'date' => $this->faker->date(),
            'thumbnail' => 'press-releases/thumbnails/'.$this->faker->uuid().'.jpg',
            'body' => $this->faker->paragraphs(3, true),
            'is_publish' => $this->faker->boolean(),
        ];
    }
}
