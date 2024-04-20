<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::factory(6)->create();
        Hero::factory()->rankS()->readyForBattle()->create();
        Hero::factory()->rankA()->readyForBattle()->create();
        Hero::factory()->rankB()->readyForBattle()->create();
        Hero::factory()->rankC()->readyForBattle()->create();
    }
}
