<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\OrderedProduct;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderedProduct>
 */
class OrderedProductFactory extends Factory
{
      protected $model = OrderedProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->numberBetween(9, 13), 
            'product_id' => $this->faker->numberBetween(4, 8),
            'ordered_product_price' => $this->faker->numberBetween(50, 200),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
