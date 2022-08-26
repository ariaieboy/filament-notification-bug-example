<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\AttributeDefault;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttributeDefaultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AttributeDefault::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->text,
            'attribute_id' => Attribute::factory()->create()->getKey()
        ];
    }
}
