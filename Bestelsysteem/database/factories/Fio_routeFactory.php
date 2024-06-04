<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Fio_routeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'routing_code' => fake()->postcode(),
            'beschrijving' => fake()->postcode(),
            'bedrijf' => $faker->name,
            'naam' => $faker->name,
            'CatCd1' => fake()->postcode(),
            'actief' => $faker->boolean,
        ];
    }
}
