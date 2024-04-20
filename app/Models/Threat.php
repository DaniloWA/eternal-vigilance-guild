<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Threat extends Model
{
    use HasFactory;

    protected $table = 'threats';

    protected $fillable = [
        'type',
        'status',
        'points',
        'latitude',
        'longitude',
    ];

    public function casts(): array
    {
        return [
            'type' => 'string',
            'status' => 'string',
            'points' => 'integer',
            'latitude' => 'float',
            'longitude' => 'float',
        ];
    }

    public function HeroThreats() {
        return $this->hasMany(HeroThreats::class);
    }
}
