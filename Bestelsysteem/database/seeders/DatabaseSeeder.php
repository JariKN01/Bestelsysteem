<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Bestelformulier;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Bestelformulier::factory(10)->create();
    }
}
