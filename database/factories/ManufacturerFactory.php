<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->text,
            'brand_name' => $this->faker->unique()->company,
            'status' => $this->faker->boolean,
            'irani' => $this->faker->boolean,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
