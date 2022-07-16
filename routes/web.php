<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function() {
    Route::get('/users/{id}/edit',[UserController::class, 'edit'])->name('users.edit');
    Route::delete('/users/{id}',[UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}',[UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});


Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::get('/', [Controller::class, 'index'])->name('index');
