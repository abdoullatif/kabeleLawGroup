<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossiers extends Model
{
    use HasFactory;

    protected $fillable = [
        'numeroDossier',
        'dateOuvertureDossier',
        'carpaDossier',
        'titreDossier',
        'referenceDossier',
        'statutDossier',
        'Plaintes_id',
        'users_id',
        'categories_id',
    ];

}
