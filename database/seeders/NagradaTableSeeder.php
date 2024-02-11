<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Nagrade;

class NagradaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nagrade::factory()->count(20)->create();
    }
}
