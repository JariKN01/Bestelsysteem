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
            'beschrijving' => $this->faker->sentence,
            'bkcd' => $this->faker->word,
            'gerelateerd' => $this->faker->word,
        ];
    }
}
