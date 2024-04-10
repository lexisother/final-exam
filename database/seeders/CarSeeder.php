<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Car::factory(10)->create();
        Car::factory()->create([
            'name' => 'Nissan Navara',
            'image' => 'nissan-navara.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Dr. Motor DR5',
            'image' => 'dr5.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Oldsmobile Cutlass',
            'image' => 'oldsmobile.jpg'
        ]);

        Car::factory()->create([
            'name' => 'BMW M1',
            'image' => 'bmwm1.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Dacia 1304',
            'image' => 'dacia1304.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Skoda 1202',
            'image' => 'skoda1202.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Iveco Daily пасс.',
            'image' => 'ivecodaily.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Fiat-Abarth 750',
            'image' => 'abarth750.jpg'
        ]);

        Car::factory()->create([
            'name' => 'BMW 745',
            'image' => 'bmw745.jpg'
        ]);

        Car::factory()->create([
            'name' => 'Jinbei Minibusus SY6482Q2',
            'image' => 'jinbei.jpg'
        ]);
    }
}
