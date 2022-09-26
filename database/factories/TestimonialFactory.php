<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'text' => $this->faker->text(100),
            'product' => $this->faker->randomDigit(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
