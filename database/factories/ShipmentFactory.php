<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Carrier;
use App\Models\Order;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;

    public function definition(): array
    {
        $user = User::factory()->create();

        return [
            'carrier_id' => Carrier::factory()->create()->id,
            'address_id' => Address::factory()->for($user)->create()->id,
            'order_id' => Order::factory()->for($user)->create()->id,
            'total_price' => $this->faker->numberBetween(25000, 35000),
            'address' => Address::factory()->make()->toArray(),
        ];
    }
}
