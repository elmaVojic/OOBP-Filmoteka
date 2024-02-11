<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Filmovi;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Filmovi::factory()->count(20)->create();
    }
}
