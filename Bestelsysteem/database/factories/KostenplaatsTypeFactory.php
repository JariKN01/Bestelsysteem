<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KostenplaatsType>
 */
class KostenplaatsTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->postcode(),
            'omschrijving' => $this->faker->sentence,
            'opmerking' => $this->faker->sentence,
        ];
    }
}
