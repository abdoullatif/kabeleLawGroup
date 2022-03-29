<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistiques extends Model
{
    use HasFactory;

    protected $fillable = [
        'dateClotureStatistique',
        'nombreStatistique',
        'users_id',
    ];

}
