<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            RanksSeeder::class,
            HeroSeeder::class,
            ThreatSeeder::class,
            HeroThreatsSeeder::class,
            HeroLocationSeeder::class
        ]);
    }
}
