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
        return [
            'order_nummer' => $faker->unique()->randomDigit,
            'omschrijving' => $faker->sentence,
            'status' => $faker->randomElement([null, 'active', 'inactive']),
            'sub_gb_inactief' => $faker->randomElement([null, 'sub1', 'sub2']),
            'cat2' => $faker->randomElement([null, 'cat1', 'cat2']),
            'opmerking_status' => $faker->randomElement([null, 'remark1', 'remark2']),
        ];
    }
}
