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
            'nummer' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'description' => $this->faker->sentence,
        ];
    }
}
