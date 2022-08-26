<?php

namespace Database\Factories;

use App\Models\Enums\OrderStatus;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id,
            'total_paid' => $this->faker->numberBetween(0, 1000000),
            'total_products' => $this->faker->numberBetween(0, 1000000),
            'total_price' => $this->faker->numberBetween(0, 1000000),
            'status' => \Arr::random(OrderStatus::cases())->value,
            'user_message' => $this->faker->text,
        ];
    }
}
