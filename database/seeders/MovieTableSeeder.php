<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Boolean;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Movie::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'name' => $faker->name,
                'code' => $faker->postcode,
                'year' => $faker->year,
                'available'=> true
            ]);
        }
    }
}
