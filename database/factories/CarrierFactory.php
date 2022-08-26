<?php

namespace Database\Factories;

use App\Models\Carrier;
use App\Services\Carrier\Contracts\CarrierType;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrierFactory extends Factory
{
    protected $model = Carrier::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'status' => $this->faker->boolean(),
            'transporter' => $this->faker->company(),
            'pay_at_dest' => $this->faker->boolean(),
            'is_free' => $this->faker->boolean(),
            'type' => \Arr::random(CarrierType::cases()),
        ];
    }
}
