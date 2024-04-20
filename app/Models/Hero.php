<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'heroes';

    protected $fillable = [
        'name',
        'rank_id',
        'points',
        'status',
        'description',
        'avatar_url',
    ];

    public function casts(): array
    {
        return [
            'name' => 'string', 
            'rank_id' => 'integer',
            'points' => 'integer',
            'status' => 'string',
            'description' => 'string', 
            'avatar_url' => 'string', 
        ];
    }

    public function rank() {
        return $this->belongsTo(Rank::class);
    }

    public function heroLocation() {
        return $this->hasOne(HeroLocation::class);
    }
}
