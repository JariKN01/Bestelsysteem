<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Logboek>
 */
class LogboekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'beschrijving' => $faker->randomElement(['aangemaakt', 'bewerkt', 'verzonden', 'goedgekeurd', 'afgekeurd', 'adresnummerGoedgekeurd', 'inOnderzoek', 'afgerond', 'onafgerond']),
        ];
    }
}
