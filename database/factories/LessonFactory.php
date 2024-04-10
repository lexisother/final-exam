<?php

namespace Database\Factories;

use DateInterval;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->dateTimeBetween('now', '+1 week');
        $endTime = (clone $startTime)->add(new DateInterval('PT1H'));

        return [
            'start_time' => $startTime->format('H:i'),
            'end_time' => $endTime->format('H:i'),
            'notes' => fake()->text(),
            'date' => $startTime->format('Y-m-d')
        ];
    }
}
