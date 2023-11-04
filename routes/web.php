<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware('auth')->group(function () {

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');
    Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');
    Route::get('/contatos/{id}/edit', [ContatoController::class, 'edit'])->name('contatos.edit');
    Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');
    Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');
    Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
    Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contatos.show');
});

require __DIR__ . '/auth.php';
Route::get('/', function () {
    return view('auth.login');
});
