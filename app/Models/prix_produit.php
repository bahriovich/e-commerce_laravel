<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produit;

class prix_produit extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = ['produit_id','prix_price' ,'prix_poids'];


    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
}
