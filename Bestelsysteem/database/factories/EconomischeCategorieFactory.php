<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EconomischeCategorie>
 */
class EconomischeCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'economische_categorie' => $this->faker->word,
            'beschrijving' => $this->faker->randomElement(['L3.8', 'L6.1', 'B6.1', 'B7.5', 'L7.5', 'B7.5', 'B7.5', 'L3.2']),
        ];
    }
}
