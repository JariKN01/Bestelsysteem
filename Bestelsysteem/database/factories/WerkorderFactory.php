<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Werkorder>
 */
class WerkorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kostenplaatsId = \App\Models\Kostenplaats::all()->random()->id;
        $subrekeningId = \App\Models\Subrekening::all()->random()->id;

        return [
            'kostenplaats_id' => $kostenplaatsId,
            'subrekenings_id' => $subrekeningId,
            'order_nummer' => $this->faker->randomNumber(),
            'omschrijving' => $this->faker->sentence,
            'status' => $this->faker->word,
            'sub_gb_inactief' => $this->faker->word,
            'cat2' => $this->faker->word,
            'opmerking_status' => $this->faker->sentence,
        ];
    }
}
