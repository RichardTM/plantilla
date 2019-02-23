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


/*  RUTA GUIA
Route::get('about', function () {
    $empresa = "";
    return view('about', ['empresa' => $empresa]);
});*/


Route::get('home', function () {

    return view('home');
});

Route::get('noticias', function () {

    return view('noticias');
});

Route::get('about', function () {

    return view('about');
});

Route::get('contactos', function () {

    return view('contactos');
});
