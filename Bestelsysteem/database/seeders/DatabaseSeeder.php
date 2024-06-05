<?php

namespace Database\Seeders;

use App\Models\Adres;
use App\Models\E1RspKpl2018;
use App\Models\FioRoute;
use App\Models\GaOrg;
use App\Models\Hoofdrekening;
use App\Models\Kostenplaats;
use App\Models\KostenplaatsType;
use App\Models\Subrekening;
use App\Models\User;
use App\Models\Bestelformulier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Afdeling;
use App\Models\Werkorder;
use Database\Factories\AfdelingFactory;
use Database\Factories\Economische_categorieFactory;
use App\Models\EconomischeCategorie;
use Database\Factories\Fio_routeFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
//        Bestelformulier::factory(10)->create(); // als laatste doen
        Adres::factory(10)->create();
        FioRoute::factory(10)->create();
        Afdeling::factory(10)->create();
        Subrekening::factory(10)->create();
        EconomischeCategorie::factory(10)->create();
        Hoofdrekening::factory(10)->create();
        GaOrg::factory(10)->create();
        KostenplaatsType::factory(10)->create();
        Kostenplaats::factory(10)->create();
        Werkorder::factory(10)->create();
        E1RspKpl2018::factory(10)->create();
    }
}
