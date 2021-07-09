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

Auth::routes();

Route::get('/contacto', 'ContactoController@index')->name('contacto');

Route::resource('/EnvioDeMensaje', 'ContactoController');

Route::get('/calculadora', 'CalculadoraController@index')->name('calculadora');

Route::resource('/calculadora', 'CalculadoraController'); 

Route::resource('/operaciones', 'Operaciones'); 