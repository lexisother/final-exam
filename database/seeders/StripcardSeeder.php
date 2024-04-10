<?php

namespace Database\Seeders;

use App\Models\Stripcard;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StripcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = User::find(['id' => 3])->first();
        Stripcard::factory(5)
            ->for($student)
            ->create();
    }
}
