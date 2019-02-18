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

//Esat ruta s para ahorrarnos código en los métodos del controlador(no repetir código)
Route::bind('product',function($id){
    return App\Product::Where('id',$id)->first();
});

Route::get('/', function () {
    return view('welcome');
});

//Indice 
Route::get('home','HomeController@index');

//Carrito ----------------

Route::get('cart/show', [
    'as' =>'cart-show',
    'uses' => 'CartContoller@show'
]);

Route::get('cart/add/{product}', [
    'as' => 'cart-add',
    'uses' => 'CartContoller@add'
]);

Route::get('cart/delete/{product}', [
    'as' => 'cart-delete',
    'uses' => 'CartContoller@delete'
]);

Route::get('cart/trash', [
    'as' => 'cart-trash',
    'uses' => 'CartContoller@trash'
]);

