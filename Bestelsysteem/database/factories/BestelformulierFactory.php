<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bestelformulier>
 */
class BestelformulierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'e1_rsp_kpl2018s_id' => $this->faker->randomNumber(2),
            'fio_routes_id' => $this->faker->randomNumber(2),
            'werkorders_id' => $this->faker->randomNumber(2),
            'adres_id' => $this->faker->randomNumber(2),
            'user_id' => $this->faker->randomNumber(2),
            'bedrag' => $this->faker->randomNumber(6),
            'bedrag_bestelbon' => $this->faker->boolean(),
            'korte_omschrijving' => $this->faker->sentence(25),
            'leverdatum' => $this->faker->dateTime(),
            'enterprise_one_number' => $this->faker->randomNumber(6),
            'naam_leverancier' => $this->faker->company(),
            'adres_leverancier' => $this->faker->address(),
            'plaats_leverancier' => $this->faker->country(),
            'postcode_leverancier' => $this->faker->randomNumber(3),
            'kvk_nummer' => $this->faker->randomNumber(6),
            'omschrijving' => $this->faker->text(50),
        ];
    }
}
