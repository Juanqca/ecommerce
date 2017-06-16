<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[
	'as'=>'home',
	'uses'=>'StoreController@index'
	]);

Route::get('product/{slug}',[
	'as'=>'product-detail',
	'uses'=>'StoreController@show'
]);

//Route::bind('product', function($slug){
//	return App\Product::where('slug', $slug)->first();
//});
//
////Categoria Dependencia Inyeccion
//Route::bind('category',function($category){
//	return App\Category::find($category);
//});
//
////Usuario Dependencia Inyeccion
//Route::bind('user',function($user){
//	return App\User::find($user);
//});

Route::get('cart/show',[
	'as'=>'cart-show',
	'uses'=>'CartController@show']);

Route::get('cart/add/{product}',[
	'as'=>'cart-add',
	'uses'=>'CartController@add'
]);

Route::get('cart/delete/{product}',[
	'as'=>'cart-delete',
	'uses'=>'CartController@delete'
]);

Route::get('cart/trash',[
	'as'=>'cart-trash',
	'uses'=>'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}',[
	'as'=>'cart-update',
	'uses'=>'CartController@update'
]);

Route::get('order-detail',[
	'middleware'=>'auth',
	'as'=>'order-detail',
	'uses'=>'CartController@orderDetail'
]);

Route::resource('/cart', 'CartController');


Auth::routes();

Route::get('/home', 'HomeController@index');


//PRODUCTS CRUD
//Route::get('products','ProductsController@listAll');
//Route::post('products\create','ProductsController@create');
//Route::get('products\update','ProductsController@update');
//Route::get('products\delete','ProductsController@delete');
//Route::get('products\show','ProductsController@show');
Route::resource('products','ProductController');



Route::resource('provideers','ProvideerController');
Route::resource('users','UsersController');
Route::resource('panelcontrol','CpController');
Route::resource('promotions','PromotionsController');
Route::resource('seguridad','SeguridadController');
