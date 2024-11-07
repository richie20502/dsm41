<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [UsuarioController::class, 'index']);

Route::get('/usuarios/list',[UsuarioController::class, 'list'])->name('user.list');
Route::get('/usuario/creado', [UsuarioController::class, 'create']);
Route::post('/usuario/creado', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/usuario/update/{id}', [UsuarioController::class, 'edit'])->name('user.update');
Route::post('/usuario/update', [UsuarioController::class, 'update'])->name('user.update.data');

Route::get('/usuario/delete/{id}', [UsuarioController::class, 'destroy'])->name('user.destroy');


Route::get('login',[AuthController::class, 'showLogin']);
Route::post('login',[AuthController::class, 'login'])->name('login');


Route::get('/home',function (){
    return view('home');
})->name('home');