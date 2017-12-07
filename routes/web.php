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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registerUsuario', 'UsuarioController@nuevoUsuario')->name('register_usuario');
Route::post('/storeUsuario', 'UsuarioController@storeUsuario')->name('store_usuario');
Route::get('/usuario/{id}', 'UsuarioController@getUsuario')->name('get_usuario');
Route::get('/usuarios', 'UsuarioController@index')->name('view_usuario');

Route::post('/loginUser', 'ApiController@loginReq');

Route::get('/hola', function(){
    print("Hola mundo!");
});

Route::post('/getPedido', 'ApiController@pedidoByid')->name('get_pedido');
Route::post('/postPedido', 'ApiController@storePedido')->name('store_pedido');
Route::get("/newPedido", 'ApiController@newPedido')->name('new_pedido');
Route::get("/viewPedido", 'PedidoController@index')->name('view_pedido');
Route::post('/updatePedido', 'ApiController@updatePedido')->name('update_pedido');
Route::get('/pedido/{id}', 'PedidoController@detalle')->name('detail_pedido');


Route::get('/articulos', 'ArticulosController@index')->name('view_articulos');

Route::get("/CSRF", function(){
   return csrf_token(); 
});