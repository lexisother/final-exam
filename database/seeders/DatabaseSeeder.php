<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(StripcardSeeder::class);

        DB::table('time_blocks')->insert([
            'car_id' => 8,
            'start_time' => '18:38:30',
            'end_time' => '19:38:30',
            'date' => '2024-04-01'
        ]);

        DB::table('instructor_infos')->insert([
            'user_id' => 2,
            'time_block_id' => 1,
            'archived' => 0,
            'image' => 'jeroen.jpg'
        ]);
    }
}
