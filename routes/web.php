<?php

use App\Models\seo;
use App\Models\settings;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});
/*
//category controller
Route::get('/category', function () {
   //$categories = Category::all();
   $categories = DB::table('categories')->get();
   return view('admin/category', compact('categories'));
    
});
*/

//route::get('/category', 'App\Http\controllers\CategoryController@index');

//Route::post('/category/add', 'App\Http\controllers\CategoryController@AddCat');

/*
Route::get('/product', function () {
    return view('admin/product');
});
*/

/*
Route::get('/register', function () {
    return view('auth/register');
});
*/


//Route::get('/', 'App\Http\controllers\UserController@index')->name('index');






Route::get('/', 'MetaController@getall')->name('index');
Route::get('/ecomarc', function ()
{
    return view('ecomarc', ['seo'=>seo::where('page','ecomarc')->get()->toArray(), 'settings'=>settings::get()->toArray()]);
})->name('ecomarc');
Route::get('/contacts', function ()
{
    return view('contacts', ['seo'=>seo::where('page','contacts')->get()->toArray(), 'settings'=>settings::get()->toArray()]);
})->name('contacts');
Route::get('/pleurotes', function ()
{
    return view('pleurotes', ['seo'=>seo::where('page','pleurotes')->get()->toArray(), 'settings'=>settings::get()->toArray()]);
})->name('pleurotes'); 
/*
Route::get('/shop', function ()
{
    return view('shop', ['seo'=>seo::where('page','shop')->get()->toArray(), 'settings'=>settings::get()->toArray()]);
})->name('shop');
*/

Route::get('/shop' , 'ShopController@index');
Route::get('/shop/{id}' , 'ShopController@product_by_cat'); 
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');

Route::get('/404', function ()
{
    return view('404', ['seo'=>seo::where('page','404')->get()->toArray(), 'settings'=>settings::get()->toArray()]);
})->name('404');



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    

Route::post('/','HomeController@logout');    
Route::get('redirects' , 'HomeController@index');

Route::get('/admin/category' , 'CategoryController@index');
Route::get('/admin/category/new' , 'CategoryController@new');
Route::post('/admin/category/add' , 'CategoryController@Add');
Route::get('/admin/category/edit/{id}' , [CategoryController::class, 'edit']);
Route::post('/admin/category/update' , [CategoryController::class, 'update']); 
Route::get('/softdelete/category/{id}' , 'CategoryController@SoftDelete');
Route::get('/admin/category/restore/{id}' , 'CategoryController@Restore'); 



    //produits routes

Route::get('/admin/produits' , 'ProduitController@index'); 
Route::get('/admin/produits/create' , 'ProduitController@create'); 
Route::post('/admin/produits/store' , 'ProduitController@store'); 

});





//Route::get('/admin/category' , 'App\Http\controllers\CategoryController@store');

/*
Route::get('redirects' , 'App\Http\controllers\HomeController@index');
/*
Route::get('categories' , 'App\Http\controllers\CategoryController');

Route::resource('/Category', CategoryController::class);
*/
