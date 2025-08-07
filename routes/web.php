<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BukuController; // <== tambahkan ini
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grup route yang hanya bisa diakses setelah login
Route::middleware('auth')->group(function () {
    // Profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk buku (CRUD)
    Route::resource('buku', BukuController::class); // <== ini penting
});

require __DIR__.'/auth.php';
