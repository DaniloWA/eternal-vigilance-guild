<?php

namespace App\Enums;

enum HeroStatusEnum: int
{
    case IN_BATTLE  = 1;
    case READY_FOR_BATTLE  = 2;
    case NOT_WORKING  = 3;

    public function getLabel(): string {
        return match ($this) {
            self::IN_BATTLE => 'In Battle',
            self::READY_FOR_BATTLE => 'Ready For Battle',
            self::NOT_WORKING => 'Not Working',
        };
    }
}
