<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

// Rutele principale conectate la controller
Route::get('/', [GymController::class, 'home'])->name('home');
Route::get('/about', [GymController::class, 'about'])->name('about.page');
Route::get('/services', [GymController::class, 'services'])->name('services.page');
Route::get('/contact', [GymController::class, 'contact'])->name('contact.page');
Route::get('/login', [GymController::class, 'login'])->name('login');

// Pagina Admin - fara middleware pentru acest laborator
Route::get('/admin', [GymController::class, 'admin'])->name('admin.page');