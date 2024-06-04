<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hoofdrekening>
 */
class HoofdrekeningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hoofd_rekening' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'),
            'beschrijving' => $this->faker->sentence,
        ];
    }
}
