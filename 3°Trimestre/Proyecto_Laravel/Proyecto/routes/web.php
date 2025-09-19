<?php

use Illuminate\Support\Facades\Route; 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('Arron');
});

Route::get('/Nosotros', function () {
    return view('nosotros');
});

Route::get('/Producto', function () {
    return view('Producto');
});

Route::get('/paquetes', function () {
    return view('paquetes');
});

Route::get('/inicio', function () {
    return view('inicio');
});