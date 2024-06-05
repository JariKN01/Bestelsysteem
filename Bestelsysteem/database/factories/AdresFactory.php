<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adres>
 */
class AdresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ga_orgs_id' => 1,
            'naam' => fake()->name(),
            'adres' => fake()->address(),
            'postcode' => fake()->postcode(),
            'plaats' => $this->faker->city(),
        ];
    }
}
