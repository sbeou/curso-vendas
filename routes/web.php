<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->to('login');
});

Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@autenticar');
Route::get('/logout', 'LoginController@logout');


Route::group(['middleware' => 'auth'], function () {

    Route::resource('/usuario', 'UsuarioController');
    Route::resource('/fornecedor', 'FornecedorController');
    Route::resource('/produto', 'ProdutoController');
    Route::resource('/cliente', 'ClienteController');
    Route::resource('/venda', 'VendaController');
    Route::resource('/compra', 'CompraController');
    Route::get('/home', function (){
        return view('home');
    });
});
