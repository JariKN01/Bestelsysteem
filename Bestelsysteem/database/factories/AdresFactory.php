<?php

namespace Database\Factories;

use App\Models\Adres;
use App\Models\GaOrg;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adres>
 */
class AdresFactory extends Factory
{
//    protected $model = GaOrg::class;
    protected $model = Adres::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'ga_orgs_id' => 1,
//            'naam' => fake()->name(),
//            'adres' => fake()->address(),
//            'postcode' => fake()->postcode(),
//            'plaats' => $this->faker->city(),
            'ga_orgs_id' => GaOrg::factory(),
            'naam' => $this->faker->name,
            'adres' => $this->faker->address,
            'postcode' => $this->faker->postcode,
            'plaats' => $this->faker->city,
        ];
    }
}
