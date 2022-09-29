<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{

    protected $fillable = [
        'name',
        'score'
    ];

    use HasFactory;
}
