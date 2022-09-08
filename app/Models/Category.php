<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\produit;

class Category extends Model
{ 

 use HasFactory;
 use SoftDeletes;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    

    protected $fillable = ['name', 'id_parent'];

    public function produits()
    {
        return $this->hasMany(produit::class, 'category_id', 'id');
    }

    public function available_subcategory()
    {
        return $this->hasMany(self::class, 'id_parent', 'id');
    }

    public function subcategory()
    {
        return $this->available_subcategory()->where('id_parent','>','0');
    } 



}

