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
            'naam' => $this->faker->randomElement(['Ansul BV', 'Zorggroep Almere Stichting', 'Nivoo Opleidingen BV', 'Roskam BV Gebr.', 'Tiller - Burleson R.', 'Badmintonvereniging', 'Randstad RiSeSmart BV', 'Jan Wisse Tweewielers', 'Sunshine Carcleaning', 'Nutstuinver. De Windhoek']),
            'adres' => $this->faker->randomElement(['Gerberastraat 19', 'Kruisplein 488', 'Diemermere 25', 'Azorenweg 56', 'Jool Hulstraat 1', 'Randstad 21 37', 'Suurhoffstraat 39', 'Van Raemdonckstraat 160', 'Hanzeweg 18']),
            'postcode' => $this->faker->randomElement(['1325 HJ', '1345 KJ', '1378 DG', '1356 ER', '1338 CK', '1345 CV', '1340 XK', '1357 NM', '1340 SK', '1339 VT']),
            'plaats' => $this->faker->randomElement(['Almere', 'Utrecht', 'Groningen', 'Cunit', 'Doorn']),
        ];
    }
}
