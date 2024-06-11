<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'email'    => 'admin@almere.nl',
            'role' => 'admin',
            'password' => bcrypt('secret'),
        ]);

//        $user->roles()->attach(1);
    }
}
