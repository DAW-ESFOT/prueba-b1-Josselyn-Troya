<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GenreTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
