<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $table = "ranks";

    protected $fillable = [
        "title",
        "max_points"
    ];

    public function casts(): array
    {
        return [
            'max_points' => 'integer',
            'title' => 'string'
        ];
    }

    public function heroes() {
        return $this->hasMany(Hero::class);
    }
}
