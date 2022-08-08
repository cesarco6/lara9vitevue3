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

Route::get('/havefun', function () {
    return view('funna');
});

Route::get('/contacto', function () {
    return view('contact');
})->name('conta');

Route::get('/frontendvue', function () {
    return view('welcome');
});

Route::get('/custom', function () {

    $msj1 = "Mensaje desde el servidor *-*";

    $data = ['msj' => $msj1, "edad" => 53];

    return view('custom', $data);
});