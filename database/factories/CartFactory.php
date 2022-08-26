<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Carrier;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'user_id' => $user->getKey(),
            'address_id' => Address::factory()->for($user)->create()->getKey(),
            'carrier_id' => Carrier::factory()->create()->getKey(),
            'guest' => null,
        ];
    }
}
