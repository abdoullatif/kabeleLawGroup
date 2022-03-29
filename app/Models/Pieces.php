<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieces extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomPiece',
        'statutPiece',
        'datePiece',
        'dossiers_id',
    ];

}
