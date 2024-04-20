<?php

namespace Database\Seeders;

use App\Models\HeroThreats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroThreatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroThreats::factory()->count(9)->create();
    }
}
