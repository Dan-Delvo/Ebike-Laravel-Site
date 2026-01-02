<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Machine>
 */
class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'User_ID' => \App\Models\User::factory(),
            'Machine_Name' => fake()->company() . ' ' . fake()->word(),
        ];
    }
}
