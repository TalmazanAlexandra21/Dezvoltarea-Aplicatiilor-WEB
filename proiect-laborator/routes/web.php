<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

// Rutele principale (Pasul 5)
Route::get('/', [GymController::class, 'home'])->name('home');
Route::get('/about', [GymController::class, 'about'])->name('about.page');
Route::get('/services', [GymController::class, 'services'])->name('services.page');
Route::get('/contact', [GymController::class, 'contact'])->name('contact.page');

// Ruta Login - FOARTE IMPORTANT: name('login') repară eroarea Symfony
Route::get('/login', [GymController::class, 'login'])->name('login');

// Pasul 8 & 16: Ruta Admin protejată cu middleware
Route::get('/admin', [GymController::class, 'admin'])->middleware('auth')->name('admin.page');

// Rute suplimentare pentru grup admin (Pasul 14 & 15)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/users', function () { return "Lista utilizatori sală"; });
    Route::get('/settings', function () { return "Setări sistem Gym"; });
});