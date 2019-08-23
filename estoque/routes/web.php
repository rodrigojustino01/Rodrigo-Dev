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

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
	
	Route::get('/home', 'ProdutosController@index')->name('home');

 	Route::get('/buscar/produtos', 'ProdutosController@index');

 	Route::get('/criar/produtos', 'ProdutosController@create');
 	Route::post('/cria/produtos', 'ProdutosController@store');

 	Route::get('/alterar/produtos/{id}', 'ProdutosController@edit');
	Route::post('/altera/produtos/{id}', 'ProdutosController@update');

	Route::get('/excluir/produtos/{id}', 'ProdutosController@destroy');


});
