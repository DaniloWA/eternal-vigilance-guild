<?php

namespace App\Enums;

enum ThreatsTypeEnum: int 
{
    case GOD = 1; //price to defeat = 10 points 
    case DRAGON = 2; //price to defeat = 8 points
    case TIGER = 3; //price to defeat = 5 points
    case WOLF = 4; //price to defeat = 3 points
 
    
    public function getLabel(): string
    {
        return match ($this) {
            self::GOD => 'God',
            self::DRAGON => 'Dragon',
            self::TIGER => 'Tiger',
            self::WOLF => 'Wolf',
        };
    }
}