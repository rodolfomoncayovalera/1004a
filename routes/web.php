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

Route::get('utgz/{nombre?}',function($name = 'por favor agrega un nombre'){
	return "Hola ".$name;
});

Route::get('ejemplo', function () {
    return view('vista1');
});

Route::get('carreras', function () {
    return view('carrera');
});

Route::resource('categoria','CategoriasController');
Route::resource('carreras','CarrerasController');
Route::resource('libros','LibrosController');
Route::resource('roles','RolesController');

Route::get('biblioteca',function() {
	return view('biblioteca');
});
