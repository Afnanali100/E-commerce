<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
      protected $model = Order::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
          return [
            'admin_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(30, 34),
            'order_date' => $this->faker->dateTimeThisMonth(),
            'order_status' => $this->faker->randomElement(['processed', 'pending', 'shipped', 'cancelled', 'delivered']),
            'total' => $this->faker->numberBetween(100, 500),
            'room_no' => $this->faker->numberBetween(101, 500), 
        ];
    }
}
