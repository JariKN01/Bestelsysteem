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
            'economische_categories_id' => 1,
            'hoofd_rekening' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'),
            'beschrijving' => $this->faker->randomElement(['4300', '4715', '8715', '8799A', '4799', '8799', '8799I', '8799V', '4033']),
        ];
    }
}
