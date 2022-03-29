<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptabilites extends Model
{
    use HasFactory;

    protected $fillable = [
        'typeOperationComptabilite',
        'natureComptabilite',
        'montantComptabilite',
        'DateComptabilite',
        'dossiers_id',
    ];

}
