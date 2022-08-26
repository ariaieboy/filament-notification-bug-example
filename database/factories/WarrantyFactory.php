<?php

namespace Database\Factories;

use App\Models\Warranty;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarrantyFactory extends Factory
{
    protected $model = Warranty::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'description' => $this->faker->realText,
            'status' => $this->faker->boolean,
            'slug' => rakolo_slug_maker(
                $this->faker->unique()->slug
            )
        ];
    }
}
