<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'date_facture',
        'montantht',
        'tva',
        'montantttc',
        'reduction',
        'adresse',
        'customer_id',
        'user_id',
        'soin_id',
    ];
}
