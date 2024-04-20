<?php

namespace Database\Seeders;

use App\Enums\RanksEnum;
use App\Models\Rank;
use Illuminate\Database\Seeder;

class RanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rank::factory()
            ->setTitle(RanksEnum::S_ID->getLabel())
            ->setMaxPoints(700)
            ->create();

        Rank::factory()
            ->setTitle(RanksEnum::A_ID->getLabel())
            ->setMaxPoints(400)
            ->create();

        Rank::factory()
            ->setTitle(RanksEnum::B_ID->getLabel())
            ->setMaxPoints(200)
            ->create();

        Rank::factory()
            ->setTitle(RanksEnum::C_ID->getLabel())
            ->setMaxPoints(100)
            ->create();
    }
}
