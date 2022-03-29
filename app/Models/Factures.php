<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factures extends Model
{
    use HasFactory;

    protected $fillable = [
        'descriptionFacture',
        'dateFacture',
        'montantFacture',
        'typeOperationFacture',
        'comptabilites_id',
    ];

}
