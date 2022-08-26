<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Enums\ProductTypes;
use App\Models\Feature;
use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category = Category::factory()->create()->getKey();
        $enFaker = \Faker\Factory::create('en_US');
        $type = \Arr::shuffle(ProductTypes::cases())[0]->value;
        $feature = Feature::factory()->create();
        return [
            'feature_id' => $feature->id,
            'title_fa' => $this->faker->title,
            'title_en' => $enFaker->title,
            'short_description' => $this->faker->text(125),
            'description' => $this->faker->text(300),
            'manufacturer_id' => Manufacturer::factory()->create(),
            'total_quantity' => 0,
            'base_price' => null,
            'type' => $type,
            'package_dimensions' => [
                'x' => $this->faker->numberBetween(0, 100),
                'y' => $this->faker->numberBetween(0, 100),
                'z' => $this->faker->numberBetween(0, 100),
            ],
            'package_weight' => $this->faker->numberBetween(0, 10000),
            'slug' => $this->faker->slug,
            'category_id' => $category
        ];
    }
}
