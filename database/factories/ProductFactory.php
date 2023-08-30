<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
      protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->unique()->word,
            'product_price' => $this->faker->numberBetween(10, 200),
            'category_id' => $this->faker->numberBetween(1, 5), 
            'product_availability' => $this->faker->randomElement(['available', 'out of stock']),
            'product_picture' => $this->faker->imageUrl(200, 200, 'products', true),
            'admin_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
