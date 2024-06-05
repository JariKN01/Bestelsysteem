<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class E1RspKpl2018Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kostenplaatsId = \App\Models\Kostenplaats::all()->random()->id;
        $hoofdrekeningId = \App\Models\Hoofdrekening::all()->random()->id;
        $subrekeningId = \App\Models\Subrekening::all()->random()->id;

        return [
            'kostenplaats_id' => $kostenplaatsId,
            'hoofdrekenings_id' => $hoofdrekeningId,
            'subrekenings_id' => $subrekeningId,
        ];
    }
}
