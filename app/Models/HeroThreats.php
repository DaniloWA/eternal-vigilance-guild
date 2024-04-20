<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroThreats extends Model
{
    use HasFactory;

    protected $table = 'hero_threats';

    protected $fillable = [
        'hero_id',
        'threat_id',
        'description',
        'points_change',
        'battle_duration_seconds',
        'completed_at'
    ];

    public function casts(): array
    {
        return [
            'hero_id' => 'integer',
            'threat_id' => 'integer',
            'points_change' => 'integer',
            'battle_duration_seconds' => 'integer',
            'completed_at' => 'datetime',
            'description' => 'string'
        ];
    }

    public function hero() {
        return $this->belongsTo(Hero::class);
    }

    public function threat() {
        return $this->belongsTo(Threat::class);
    }
}
