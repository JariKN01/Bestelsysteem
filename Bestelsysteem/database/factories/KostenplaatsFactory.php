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
            'code' => $this->fake->unique()->word,
            'omschrijving' => $this->fake->sentence,
            'opmerking' => $this->fake->sentence,
        ];
    }
}
