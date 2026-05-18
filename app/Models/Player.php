<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'position',
        'team_id',
        'profile_photo',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
