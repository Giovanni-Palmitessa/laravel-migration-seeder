<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            Train::create([
                'company' => $faker->word(),
                'departure_railway_station' => $faker->words(3, true),
                'arrival_railway_station' => $faker->words(3, true),
                'departure_time' => $faker->time(),
                'arrival_time' => $faker->time(),
                'company' => $faker->word(),
                'company' => $faker->word(),
            ]);
        }
    }
}
