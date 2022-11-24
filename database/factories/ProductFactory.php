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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'category' => $this->faker->numberBetween(0, 10),
            'image' => $this->faker->imageUrl(),
            'text' => $this->faker->text(),
            'code' => $this->faker->randomNumber(5, true),
            'quantity' => $this->faker->randomNumber(3, false),
            'wholesale_price' => $this->faker->numberBetween(0, 100),
            'retail_price' => $this->faker->numberBetween(100, 200),
            'sku' => $this->faker->randomNumber(3, false),
            'weight' => $this->faker->randomNumber(3, false),
            'brand' => $this->faker->word(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
