<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Redatelji;

class RedateljTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Redatelji::factory()->count(20)->create();
    }
}
