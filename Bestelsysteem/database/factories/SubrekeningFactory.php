<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subrekening>
 */
class SubrekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nummer' => $this->faker->randomElement(['222', '304', '612', '01111', '01121', '01211', '01131', '01291', '01291A']),
            'description' => $this->faker->randomElement(['222', '304', '612', '01111', '01121', '01211', '01131', '01291', '01291A']),
        ];
    }
}
