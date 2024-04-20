<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroLocation extends Model
{
    use HasFactory;

    protected $table = 'heroes_locations';

    protected $fillable = [
        'hero_id',
        'latitude',
        'longitude',
    ];

    public function casts(): array
    {
        return [
            'latitude' => 'float',
            'longitude' => 'float',
            'hero_id' => 'integer',
        ];
    }

    public function hero() {
        return $this->belongsTo(Hero::class);
    }
}
