<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\AttributeDefault;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductAttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductAttribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->name,
            'attribute_id' => Attribute::factory()->create()->getKey(),
            'attribute_default_id' => AttributeDefault::factory()->create()->getKey(),
            'product_id' => Product::factory()->create()->getKey()
        ];
    }
}
