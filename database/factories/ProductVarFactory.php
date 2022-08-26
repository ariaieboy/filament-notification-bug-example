<?php

namespace Database\Factories;

use App\Models\Feature;
use App\Models\FeatureValue;
use App\Models\Product;
use App\Models\ProductVar;
use App\Models\Warranty;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductVarFactory extends Factory
{
    protected $model = ProductVar::class;

    public function definition(): array
    {
        $warranty = Warranty::factory()->create();
        $feature = Feature::factory()->create();
        $product = Product::factory()->for($feature)->create();
        $featureValue = FeatureValue::factory()->for($feature)->create();
        return [
            'seller_reference' => $this->faker->unique()->uuid,
            'max_per_order' => $this->faker->numberBetween(0, 10),
            'quantity' => $this->faker->numberBetween(0, 100),
            'buy_price' => $this->faker->numberBetween(0, 1000000),
            'sell_price' => $this->faker->numberBetween(0, 100000000),
            'warranty_id' => $warranty->id,
            'product_id' => $product->id,
            'feature_value_id' => $featureValue->id
        ];
    }
}
