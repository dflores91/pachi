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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('crud','UsuarioController');
Route::resource('project','ProyectoController');
Route::get('project/{id}/members',"IntegranteController@index")->name('project-members');

Route::get('busqueda/{email}/{proyecto}',"BusquedaController@index")->name('busqueda');
Route::post('busquedas',"BusquedaController@store")->name('busquedas');
Route::post('adduser/{email}/{proyecto}',"BusquedaController@agregarUsuario")->name('adduser');
Route::resource('member','IntegranteController');
Route::delete('mem/{usuario}/{proyecto}',"IntegranteController@borrar")->name('mem');
Route::resource('version','Controlversion');
Route::get('/upload', 'UploadController@index');
Route::post('/upload', 'UploadController@do_upload');
