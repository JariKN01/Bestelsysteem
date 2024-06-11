<?php

namespace Database\Factories;

use App\Models\Afdeling;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Afdeling>
 */
class AfdelingFactory extends Factory
{
    protected $model = Afdeling::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => $this->faker->randomElement(['Stadsbedrijf', 'Werk & Inkomen', 'Stadsruimte', 'Financiën en Control', 'Vergunning verlening& Toezicht en Handhaving', 'Bestuur& Veiligheid& Leefbaarheid & Strategie'])
        ];
    }
}
