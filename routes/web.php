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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('producto','ProductoController');

Route::resource('categoria','CategoriaController')->parameters(['categoria' => 'categoria']);;

/*
//Rutas para listado y carga de archivos
Route::get('archivo', function() {
    $archivos = App\Archivo::all();
    return view('archivos.archivoIndex', compact('archivos'));
});
Route::get('archivo/formulario', function() {
    return view('archivos.archivoForm');
});

Route::post('archivo/cargar', 'ArchivoController@upload')->name('archivo.upload');

Route::get('archivo/{archivo}/descargar', 'ArchivoController@download')->name('archivo.download');

Route::post('archivo/{archivo}/borrar', 'ArchivoController@delete')->name('archivo.delete');
*/