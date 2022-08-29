<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $new_travel = new Travel();
            $new_travel->agency_name = $faker->word() . ' ' . 'Airline';
            $new_travel->destination = $faker->state();
            $new_travel->code = $faker->randomNumber(2, true);
            $new_travel->is_available = $faker->numberBetween(0, 1);
            $new_travel->date = $faker->dateTimeBetween('now', '+4 weeks');
            $new_travel->price = $faker->randomFloat(2, 20, 300);
            $new_travel -> save();
        }
    }
}
