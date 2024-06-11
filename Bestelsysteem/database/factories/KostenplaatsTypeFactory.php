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
            'omschrijving' => $this->faker->randomElement(['Gronden en terreinen', 'Bedrijfsgebouwen', 'Aankoopcentrale Exploitatie', 'GREX-Archeologisch Onderzoek', 'Voorziening Onderhoud', 'Projectadministratie', 'Subsidies', 'MVA Machines en Installaties']),
            'opmerking' => $this->faker->sentence,
        ];
    }
}
