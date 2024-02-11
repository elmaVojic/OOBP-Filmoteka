<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Zanrovi;

class ZanrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zanrovi::factory()->count(20)->create();
    }
}
