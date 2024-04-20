<?php

namespace Database\Seeders;

use App\Models\HeroLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroLocation::factory()->count(10)->create();
    }
}
