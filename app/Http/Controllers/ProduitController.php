<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\produit;
use App\Models\prix_produit;
use App\Models\promotion_prix;
use App\Models\images_produit;
use Illuminate\Http\Request;
use DB;

class ProduitController extends Controller
{
    public function index()
    {

       $products = produit::with('Category')->get();
        return view('admin.produits.index');
    }
  

    public function create()
    {
        $categories = Category::all();
        return view('admin.produits.create', compact('categories'));
    }
  

    public function store(Request $request,produit $produits,prix_produit $prix_produits)
    {
        
        $products = produit::with('Category')->get();
        $p_products = prix_produit::with('produit')->get();
        $pr_p_products = promotion_prix::with('produit')->get();

        $data = array(
            'name' => $request->name,
            'category_id' => $request->category_id, 
            'image_p' => $request->image_p,   
            'description' => $request->description,
            'disponibilite' => $request->disponibilite,
            'rupture_stock' => $request->rupture_stock,
        );
        if($request->hasFile('image_p')){
            $image_p = $request->file('image_p');
            $filename = date('dmY').time().'.'.$image_p->getClientOriginalExtension();
            $image_p->move(public_path("/uploads"), $filename);
            $data['image_p'] = $filename;
        }
        $id_produit = produit::insertGetId($data);

        $list_prix= $request->test;
        var_dump($list_prix);
        foreach($list_prix as $c=>$one){
            $data_prix = array(
                'prix_price' => $one['prix_price'],
                'prix_poids' => $one['prix_poids'], 
                'produit_id' => $id_produit, 
    
            );
            $id_prix = prix_produit::insertGetId($data_prix);
        }

        $request->validate([
            'min_pr_prix' => 'required',
            'valeur_pr' => 'required',
            'type_pr' => 'required',
            'd_debut' => 'required',
            'd_fin' => 'required',
            ]);
            $promotion = new promotion_prix;
            $promotion->min_pr_prix = $request->min_pr_prix;
            $promotion->produit_id = $id_produit;
            $promotion->valeur_pr = $request->valeur_pr;
            $promotion->type_pr = $request->type_pr;
            $promotion->d_debut = $request->d_debut;
            $promotion->d_fin = $request->d_fin;
            $promotion->save();



                            
        var_dump($request->file('filenames'));
        $this->validate($request, [

            'filenames' => 'required',
            'filenames.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $image)
            {
                $name_img=$image->getClientOriginalName();
                $image->move(public_path("/uploads").'/images/', $name_img);  
                $data_imgs[] = $name_img;  
            }
        }

        $form= new images_produit();
        $form->filenames=json_encode($data_imgs);


        $form->save();

       
    }

    public function show(Product $product)
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

