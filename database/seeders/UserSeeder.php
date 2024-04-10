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
        User::factory()->create([
            'name' => 'Giovanni',
            'email' => 'giovanni@downtheroad.nl',
            'password' => 'testtest',
            'role' => 'Eigenaar',
        ]);

        User::factory()->create([
            'name' => 'A',
            'email' => 'a@downtheroad.nl',
            'password' => 'testtest',
            'role' => 'Instructeur',
        ]);

        User::factory()->create([
            'name' => 'Pim',
            'email' => 'pim@downtheroad.nl',
            'password' => 'testtest',
            'role' => 'Leerling',
        ]);
    }
}
