<?php

namespace Database\Seeders;

use App\Models\Penerbangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use SebastianBergmann\Timer\Duration;

class PenerbanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 1; $i++) {
            Penerbangan::create([
                'Date_of_Journey' => $faker->date,
                'Source' => $faker->city,
                'Destination' => $faker->city,
                'Transit' => $faker->city,
                'dep_time' => $faker->time,
                'Arrival_time' => $faker->time,
            ]);
        }
    }
}
