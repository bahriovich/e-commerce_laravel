<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotion_prix extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';


    protected $fillable = ['produit_id','min_pr_prix', 'valeur_pr', 'type_pr', 'd_debut', 'd_fin'];

    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
}
