<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stripcard>
 */
class StripcardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $level = fake()->randomElement(['A', 'B', 'C']);
        $lessons = match ($level) {
            'A' => 5,
            'B' => 10,
            'C' => 20
        };

        return [
            'remaining_lessons' => $lessons,
            'level' => $level,
        ];
    }
}
