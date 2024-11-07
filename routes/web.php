<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Middleware\isAuthenticated;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [UsuarioController::class, 'index']);

Route::middleware([isAuthenticated::class])->group(function () {
    Route::get('/usuarios/list',[UsuarioController::class, 'list'])->name('user.list');
});


Route::get('/usuario/creado', [UsuarioController::class, 'create']);
Route::post('/usuario/creado', [UsuarioController::class, 'store'])->name('user.store');


Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home'); // Asegúrate de tener una vista llamada 'home'
})->name('home');