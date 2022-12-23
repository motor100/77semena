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
            'category_id' => $this->faker->numberBetween(1, 9),
            'image' => $this->faker->numberBetween(0, 10) . '.jpg',
            'text' => $this->faker->text(),
            'code' => $this->faker->numberBetween(1000000000, 1000000000000),
            'quantity' => $this->faker->randomNumber(3, false),
            'buying_price' => $this->faker->randomNumber(3, false),
            'wholesale_price' => $this->faker->numberBetween(0, 100),
            'retail_price' => $this->faker->numberBetween(100, 200),
            'promo_price' => NULL,
            'weight' => $this->faker->numberBetween(1, 100),
            'brand' => $this->faker->word(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
