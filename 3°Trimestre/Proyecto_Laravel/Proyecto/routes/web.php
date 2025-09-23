<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegistroClienteController;

// -----------------------
// 🔹 Login
// -----------------------
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// -----------------------
// 🔹 Usuarios (CRUD)
// -----------------------
// Usamos resource en minúscula para evitar problemas de nombres de rutas
Route::resource('Usuarios', UsuariosController::class)->middleware('auth');
Route::resource('Productos', ProductosController::class)->middleware('auth');
Route::resource('Paquetes', PaquetesController::class)->middleware('auth');
Route::resource('Servicios', ServiciosController::class)->middleware('auth');

Route::post('/registro-cliente', [RegistroClienteController::class, 'store'])->name('registro-cliente.store');

// -----------------------
// 🔹 Rutas de tipo de usuario
// -----------------------
// Estas rutas son a donde se redirige según tipo de usuario
Route::middleware('auth')->group(function () {
    Route::get('/perfil', [UsuariosController::class, 'perfil'])->name('perfil'); // admin
    Route::get('/sup-bodega', function () { return view('sup-bodega'); })->name('sup-bodega');
    Route::get('/gerente', function () { return view('gerente'); })->name('gerente');
    Route::get('/cliente', function () { return view('cliente'); })->name('cliente');
});

// -----------------------
// 🔹 Páginas públicas
// -----------------------
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

Route::get('/Registro', function () {
    return view('Registro');
});

Route::get('/index', function () {
    return view('index');
});