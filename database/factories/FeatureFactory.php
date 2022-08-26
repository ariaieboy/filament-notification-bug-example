<?php

namespace Database\Factories;

use App\Models\Enums\FeatureTypes;
use App\Models\Feature;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    protected $model = Feature::class;

    public function definition(): array
    {
        $case = \Arr::shuffle(FeatureTypes::cases());
        return [
            'title' => $this->faker->title,
            'type' => $case[0]->value
        ];
    }
}
