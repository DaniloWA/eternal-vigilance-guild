<?php

namespace Database\Seeders;

use App\Models\Threat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThreatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Threat::factory(20)->create();
        Threat::factory()->typeGod()->create();
        Threat::factory()->typeDragon()->create();
        Threat::factory()->typeTiger()->create();
        Threat::factory()->typeWolf()->create();
    }
}
