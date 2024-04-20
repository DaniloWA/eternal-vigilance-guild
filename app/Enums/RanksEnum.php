<?php

namespace App\Enums;

enum RanksEnum: int 
{
    case S_ID = 1; // 700 points
    case A_ID = 2; // 400 points
    case B_ID = 3; // 200 points
    case C_ID = 4; // 100 points

    public function getLabel(): string
    {
        return match ($this) {
            self::S_ID => 'S',
            self::A_ID => 'A',
            self::B_ID => 'B',
            self::C_ID => 'C',
        };
    }
}
