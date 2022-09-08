<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryformRequest;
use DB;
use App\Models\Cart;
use App\Models\produit;
use App\Models\seo;
use App\Models\settings;


class ShopController extends Controller
{
    public function index()
    {

        $array = array();

        $categories_p = Category 
        ::where('id_parent', '=', 0)
        ->get();
        foreach($categories_p as $cat){
            $s = Category
            ::where ('id_parent' , '=', $cat->id)->get();
            $cat->subcategory=$s;
            $array[]=$cat;
        }
     

        $products = DB::table('produits')->where('disponibilite',1)
        ->select('produits.*', 'prix_price', 'prix_poids')
        ->join('prix_produits','produits.id','=','prix_produits.produit_id')
        ->get();

        return view ('shop',['seo'=>seo::get()->toArray(), 'settings'=>settings::get()->toArray(),"categories"=>$array ?? array(),"produits"=>$products?? array()]);  //, compact('categories_p')   //,'categorie'=>$categories
    
 

}
  

    public function product_by_cat($id)
    {
        $category=Category::where('id',$id)->first();

        
        if($category->id_parent > 0){
            $products = DB::table('produits')->where('disponibilite',1)->where('category_id','=', $category->id)  
            ->select('produits.*', 'prix_price', 'prix_poids','prix_produits.id as price_id')
            ->join('prix_produits','produits.id','=','prix_produits.produit_id')
            ->get();
        }    
        else {
            $array_sub=$category=Category::where('id_parent',$id) ->select('id') ->get() ; 
         
            $products = DB::table('produits')->where('disponibilite',1)->whereIn('category_id',$array_sub)
            ->select('produits.*', 'prix_price', 'prix_poids','prix_produits.id as price_id')
            ->join('prix_produits','produits.id','=','prix_produits.produit_id')
            ->get(); 
        }    


        $array = array();


          $categories_p = Category 
          ::where('id_parent', '=', 0)
          ->get();
          foreach($categories_p as $cat){
              $s = Category
              ::where ('id_parent' , '=', $cat->id)->get();
              $cat->subcategory=$s;
              $array[]=$cat;
          }
          var_dump(
          Cart::where('produit_id', 1)->first()
          );

        return view ('shop_product',['seo'=>seo::get()->toArray(), 'settings'=>settings::get()->toArray(),"categories"=>$array ?? array(),"produits"=>$products?? array()]);  //, compact('categories_p')   //,'categorie'=>$categories


    }

    public function cart()
    {
        return view('cart');

    }

    
    public function addToCart(Request $request)
    {

    }
  

    public function store()
    {
       
    }

    public function show()
    {
        return view('products.show',compact('product'));
    }
  

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
  

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
      
        $product->update($request->all());
      
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
       
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
