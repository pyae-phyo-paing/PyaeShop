<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'voucher_no' => $this->faker->ean8,
            'total' => $this->faker->numberBetween(100000, 900000),
            'qty' =>rand(1,20),
            'payment_slip' =>$this->faker->imageUrl,
            'status' =>$this->faker->randomElement(['active','inactive','pending']),
            'note' =>$this->faker->text(100),
            'item_id' =>rand(1,20),
            'payment_id' =>rand(1,20),
            'user_id' =>rand(1,2)
        ];
    }
}
