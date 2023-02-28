<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text(200),
            'availability' => $this->faker->boolean,
            'brand' => $this->faker->word,
            'category' => $this->faker->word,
            'price' => $this->faker->randomNumber(2),
            'image' => $this->faker->imageUrl(),
            'size' => $this->faker->word,
            'color' => $this->faker->word,
            'stock' => $this->faker->randomNumber(2),
        ];
    }
}
