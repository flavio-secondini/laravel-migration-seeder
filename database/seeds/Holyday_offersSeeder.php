<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holyday_offer;

class Holyday_offersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $destinazione = new Holyday_offer();
          $destinazione->destinazione = $faker->words(3, true);
          $destinazione->save();
        }
    }
}
