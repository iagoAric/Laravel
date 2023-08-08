<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::delete('/contatos/{id}', [ContatoController::class, 'destroy'])->name('contatos.destroy');
Route::put('/contatos/{id}', [ContatoController::class, 'update'])->name('contatos.update');
Route::get('/contatos/{id}/edit', [ContatoController::class, 'edit'])->name('contatos.edit');
Route::get('/contatos', [ContatoController::class, 'index'])->name('contatos.index');
Route::get('/contatos/create', [ContatoController::class, 'create'])->name('contatos.create');
Route::post('/contatos', [ContatoController::class, 'store'])->name('contatos.store');
Route::get('/contatos/{id}', [ContatoController::class, 'show'])->name('contatos.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
