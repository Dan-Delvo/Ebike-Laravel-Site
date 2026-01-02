<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amount = fake()->numberBetween(5, 60);

        return [
            'Machine_ID' => 1,
            'Amount' => $amount,
            'Duration' => $amount * 2,
            'Time' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
