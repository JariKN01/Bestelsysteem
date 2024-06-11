<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kostenplaats>
 */
class KostenplaatsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kostenplaats_type_id' => 1,
            'ga_orgs_id' => 1,
            'beschrijving' => $this->faker->randomElement(['100262', '100103', '100275', '100278', '100387', '100417', '100395', '100509', '100519']),
            'bkcd' => $this->faker->word,
            'gerelateerd' => $this->faker->word,
        ];
    }
}
