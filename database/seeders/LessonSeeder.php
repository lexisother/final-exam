<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::factory(10)
            ->state(new Sequence(
                fn (Sequence $sequence) => [
                    'car_id' => Car::all()->random()->id,
                ]
            ))
            ->create([
                'student_info_id' => 3,
            ]);
    }
}
