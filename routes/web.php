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
    return view('welcome');
});
// Route::get('/listaUsuarios','UsuariosController@index');

Auth::routes( ['register' => false] );

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('empresas', 'EmpresaController');

Route::resource('trailers', 'TrailersController');

Route::resource('tiposProductos', 'TiposProductoController');

Route::resource('productos', 'ProductosController');

Route::resource('clientes', 'ClientesController');

Route::resource('personas', 'PersonasController');











































Route::resource('guiasTransportes', 'GuiasTransporteController');





Route::resource('facturas', 'FacturasController');

Route::resource('facturaDetalles', 'FacturaDetallesController');