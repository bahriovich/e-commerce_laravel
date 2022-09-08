<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.common.header');
    }
  

    public function create()
    {

    }
  

    public function store(Request $request,produit $produits,prix_produit $prix_produits)
    {
       

       
    }

    public function show(Product $product)
    {

    }
  

    public function edit(Product $product)
    {

    }
  

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {

    }
}
