<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryformRequest;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class CategoryController extends Controller
{

    public function index()
    {

        $categories = DB::select('
        SELECT c1.*,c2.name as namep FROM `categories` as c1 LEFT JOIN categories as c2 ON c2.id=c1.id_parent where c1.deleted_at is NULL;
 
        '); 
        $trachCat = Category::onlyTrashed()->latest()->paginate(3);
        return view ('admin.categories.category', compact('categories', 'trachCat'));
      

    }


    public function new()
    {
        $categories_p = Category 
        ::where('id_parent', '=', 0)
        ->get();        
        return view('admin.categories.add', ["categories"=>$categories_p]);      

    }

    public function Add(Request $request)
    {
      

        $request->validate([
            'name' => 'required',
            'id_parent' => 'required'
            ]);
            $category = new Category;
            $category->name = $request->name;
            $category->id_parent = $request->id_parent;
            $category->save();
    
            $categories = Category::all();
            return redirect()->action([CategoryController::class, 'index']);


    }


    public function store(Request $request)
    { 
    }


    public function show($id)
    {
    }


    public function edit(Request $request, Category $categories)
    {  
        
        $id = $request->id;
        $categories_p = Category 
        ::where('id_parent', '=', 0)
        ->get();    
        $categories_par = Category::find($id);
        return view('admin.categories.edit', ["categories_select"=>$categories_p, "categories"=>$categories_par]);

    }


    public function update(Request $request, Category $categories)
    {
        $id = $request->id;
        $data = array(
            'name' => $request->name,
            'id_parent'=> $request->id_parent,
        );
        $categories = new Category;
        $categories ::where('id',  $id)-> update($data);
        return redirect('/admin/category');

    }


    public function SoftDelete($id)
    {
        $delete = Category::find($id)->delete();
        $delete = Category::where('id_parent', $id)->delete();
        return Redirect()->back()->with('success', 'Category soft delete successfully');

    }


    public function Restore($id){
        $delete = Category::withTrashed()->find($id)->restore();
        $delete = Category::withTrashed()->whereNotNull('id_parent')->restore();
        return Redirect()->back()->with('success', 'Category restore successfully');

    }




}
