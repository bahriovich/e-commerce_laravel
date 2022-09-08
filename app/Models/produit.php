<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\prix_produit;

class produit extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id';


    protected $fillable = ['name', 'category_id', 'description', 'image_p', 'disponibilite', 'rupture_stock'];




    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prix_produit()
    {
        return $this->hasMany(prix_produit::class, 'produit_id', 'id');
    }

    public function promotion_prix()
    {
        return $this->hasMany(promotion_prix::class, 'produit_id', 'id');
    }


}
