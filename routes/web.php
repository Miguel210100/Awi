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
Route::get('/saludo', function () {
    return ('Hola mundo laravel');
});
Route::get('/presentacion', function () {
    return view('practica1');
});
Route::get('/calculadora', function () {
    return view('calculadora');
});

Route::get('/sumar','App\Http\Controllers\controladorcalculadora@sumar') -> name('sumar');
Route::get('/mostrar','App\Http\Controllers\controladorworld@mostrar') -> name('mostrar');
Route::get('/ver','App\Http\Controllers\controladorworld@ver');
Route::get('/pdf','App\Http\Controllers\controladorworld@download')->name('pdf');
Route::get('/Wp', function () {
    return view('vista_cityPDF');
});
Route::get('/excel','App\Http\Controllers\controladorworld@export')->name('excel');
Route::get('/word','App\Http\Controllers\controladorworld@store')->name('word');
//-EXAMEN-\\

Route::get('/verpaises','App\Http\Controllers\controladorworld@mostrarc')->name('mostrarc');
Route::get('/ver','App\Http\Controllers\controladorworld@verc');
Route::get('/pdfc','App\Http\Controllers\controladorworld@downloadc')->name('pdfc');

//CARRITO\\
Route::get('/carrito', 'App\Http\Controllers\ControladorCarrito@productos' );
Route::post('/cart-add', 'App\Http\Controllers\ControladorCart@add')->name('cart.add');
Route::get('/cart-checkout','App\Http\Controllers\ControladorCart@cart')->name('cart.checkout');
Route::post('/cart-clear', 'App\Http\Controllers\ControladorCart@clear')->name('cart.clear');
Route::post('/cart-removeitem', 'App\Http\Controllers\ControladorCart@removeitem')->name('cart.removeitem');