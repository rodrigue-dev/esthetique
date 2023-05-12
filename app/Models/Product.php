<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'image',
        'description',
        'min_qte',
        'max_qte',
        'price',
        'product_type_id',
        'fournisseur_id',
    ];
    public function categorie() {
        return $this->belongsTo(Soin_type::class, 'product_type_id', 'id');
    }
}
