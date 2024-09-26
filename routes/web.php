<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [UsuarioController::class, 'index'])->name('users.index');


Route::get('/users/create', [UsuarioController::class, 'create'])->name('users.create');
Route::post('/users', [UsuarioController::class, 'store'])->name('users.store');


