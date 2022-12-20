<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->start_station = $faker->randomElement(['Monza', 'Milano', 'Bergamo', 'Bologna', 'Roma', 'Firenze', 'Faenza']);
            $train->arrive_station = $faker->randomElement(['Monza', 'Milano', 'Bergamo', 'Bologna', 'Roma', 'Firenze', 'Faenza']);
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->ean8();
            $train->wagon = $faker->bothify('#??');
            $train->on_time = $faker->randomElement(['true', 'false']);
            $train->cancelled = $faker->randomElement(['true', 'false']);
            $train->save();
        }
    }
}
