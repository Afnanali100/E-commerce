<?php

namespace Database\Factories;
use App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
      protected $model = Admin::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_name' => $this->faker->name,
            'admin_email' => $this->faker->unique()->safeEmail,
            'admin_password' => bcrypt('password'), 
            'admin_pic' => 'default.jpg',
        ];
    }
}
