<?php

namespace Database\Factories;

use App\Models\Afdeling;
use App\Models\GaOrg;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GaOrg>
 */
class GaOrgFactory extends Factory
{
    protected $model = GaOrg::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'langNr' => $this->faker->unique()->word,
            'afdelings_id' => Afdeling::factory(),
            'naam' => $this->faker->company,
            'departement' => $this->faker->word,
            'titel' => $this->faker->jobTitle,
            'bedrijf' => $this->faker->company,
        ];
    }
}
