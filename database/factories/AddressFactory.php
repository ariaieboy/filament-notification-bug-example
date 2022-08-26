<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\IranProvince;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = Address::class;

    public function definition(): array
    {
        $province = IranProvince::inRandomOrder()->first();
        return [
            'title' => $this->faker->title,
            'iran_province_id' => $province->getKey(),
            'iran_city_id' => $province?->cities()->inRandomOrder()->first()->getKey(),
            'user_id' => User::factory()->create()->id,
            'plaque' => $this->faker->randomNumber(),
            'floor' => $this->faker->randomNumber(),
            'unit' => $this->faker->randomNumber(),
            'postcode' => (string) $this->faker->randomNumber(5) . (string) $this->faker->randomNumber(5),
            'address' => $this->faker->address,
            'custom_receiver' => $this->faker->boolean,
            'receiver_first_name' => $this->faker->firstName,
            'receiver_last_name' => $this->faker->lastName,
            'receiver_phone' => $this->faker->unique()->numerify("09#########"),
        ];
    }
}
