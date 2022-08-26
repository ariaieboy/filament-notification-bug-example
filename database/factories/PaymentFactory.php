<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Payment;
use App\Models\User;
use App\Services\Payment\Contracts\PaymentTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition(): array
    {
        $user = User::factory()->create();
        $order = Order::factory()->for($user)->create();
        return [
            'order_id' => $order->id,
            'type' => \Arr::random(PaymentTypes::cases()),
            'gateway' => 'local',
            'amount' => $order->total_price,
        ];
    }
}
