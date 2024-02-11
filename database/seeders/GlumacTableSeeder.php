<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Glumci;

class GlumacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glumci::factory()->count(20)->create();
    }
}
