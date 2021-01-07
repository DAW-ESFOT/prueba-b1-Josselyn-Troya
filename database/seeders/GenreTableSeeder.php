<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Genre::create([
                'name' => $faker->randomElement(['Action', 'Thriller', 'Sci-Fi', 'Romance', 'Comedy', 'Drama', 'Fantasy', 'Horror',]),
            ]);

        }
    }
}
