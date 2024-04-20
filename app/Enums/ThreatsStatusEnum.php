<?php

namespace App\Enums;

enum ThreatsStatusEnum: int 
{
    case ACTIVE = 1;
    case INACTIVE = 2; 

    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
        };
    }
}
