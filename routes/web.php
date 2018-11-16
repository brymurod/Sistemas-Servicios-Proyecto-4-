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
Route::get('/','IndexController@index');
//Route::get('order','OrderController@index');
Route::get('shop_cart','ShoppingCartController@index');
Route::get('registration_page','UsuarioController@register');
//Route::match(['get', 'post'],'order/shop_cart/add', 'ShoppingCartController@add');
Route::post('order/shop_cart/add', 'ShoppingCartController@add');
Route::post('shop_cart/add', 'ShoppingCartController@add');

Route::get('order/search_Frutas', 'OrderController@search_Frutas');
Route::get('order/search_Verduras', 'OrderController@search_Verduras');

Route::get('/store/{id}', [
    'uses' => 'ShoppingCartController@store',
    'as' => 'shop_cart.store'
]);

Route::get('login_page','IndexController@login');

//Route::get('order/{id}', ['as' => 'order.index', 'uses' => 'OrderController@index']);

Route::resource('log','LogController');
Route::resource('admin','AdminController');
Route::resource('order','OrderController');
Route::resource('usuarios','UsuarioController');
Route::resource('productos','ProductoController');

Route::get('verduras','OrderController@verduras');
Route::get('frutas','OrderController@index');
//Route::get('frutas/{category}',['as'=> 'frutas', 'uses'=>'OrderController@index']);
Route::get('logout','LogController@logout');

//routes to controller usuarios para administrar usuarios pedidos y productos

 Route::get('Administrador','AdministradorController@index');

Route::get('admin_edit','AdminController@index');

//Route::get('welcome','OrderController@welcome');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
