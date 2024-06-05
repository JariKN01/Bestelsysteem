<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GaOrg>
 */
class GaOrgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'ga_orgs_id' => $this->faker->unique()->regexify('[A-Za-z0-9]{8}'),
//            'naam' => $this->faker->word,
//            'departement' => $this->faker->word,
//            'titel' => $this->faker->jobTitle,
//            'bedrijf' => $this->faker->company,

            'afdelings_id' => $this->faker->randomDigitNotNull,
            'naam' => $this->faker->name,
            'departement' => $this->faker->word,
            'titel' => $this->faker->jobTitle,
            'bedrijf' => $this->faker->company,
        ];
    }
}
