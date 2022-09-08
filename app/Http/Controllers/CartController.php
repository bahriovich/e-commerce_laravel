<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Cart;
use App\Models\produit;
use App\Models\seo;
use App\Models\settings;


class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        $product_price = $request->input('product_price');
        $prod_check = produit::where('id', $product_id)->first();
       
           if(!empty(Cart::where('produit_id', $product_id)->first()))
            {
                return response()->json(['status' => 'hhhh'."Already added to cart"]);

            }
            else   
            {
                $cartItem = new Cart;
                $cartItem->produit_id = $product_id;
                $cartItem->produit_qty = $product_qty;
                $cartItem->price_id = $product_price;
                $cartItem->save();
             //   var_dump($cartItem);
                return response()->json(['status' => $prod_check -> name."added to cart"]); 
            }  
        
        
    }
}
