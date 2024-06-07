<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FioRoute>
 */
class FioRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'adres_id' => 1,
            'routing_code' => fake()->postcode(),
            'beschrijving' => fake()->postcode(),
            'bedrijf' => fake()->postcode(),
            'naam' => fake()->postcode(),
            'CatCd1' => fake()->postcode(),
            'actief' => fake()->boolean,
        ];
    }
}
