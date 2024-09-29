<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [UsuarioController::class, 'index']);

Route::get('/usuario/creado', [UsuarioController::class, 'create']);
Route::post('/usuario/creado', [UsuarioController::class, 'store'])->name('user.store');
Route::get('/usuario/paginacion', [UsuarioController::class, 'paginate'])->name('user.paginate');
