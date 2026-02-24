<?php

use App\Http\Controllers\GymController;
use Illuminate\Support\Facades\Route;

// --- PAGINI PUBLICE ---
// Pagina principală (Home)
Route::get('/', [GymController::class, 'home'])->name('home');

// Paginile Despre și Contact (repară erorile 404/Undefined method)
Route::get('/about', [GymController::class, 'about'])->name('about.page');
Route::get('/contact', [GymController::class, 'contact'])->name('contact.page');

// Pagina cu cardurile de servicii
Route::get('/services', [GymController::class, 'services'])->name('services.page');


// --- ÎNREGISTRARE MEMBRI ---
// Formularul de înscriere (primește ?plan=...)
Route::get('/register-member', [GymController::class, 'registerMember'])->name('member.register');
// Salvarea datelor în baza de date
Route::post('/register-member', [GymController::class, 'storeMember'])->name('member.store');


// --- ZONA DE ADMINISTRARE (PROTEJATĂ) ---
// Pagina de Login pentru Admin
Route::get('/admin/login', [GymController::class, 'showLoginPage'])->name('admin.login.page');
Route::post('/admin/login', [GymController::class, 'login'])->name('admin.login.submit');
// Logout
Route::get('/admin/logout', [GymController::class, 'logout'])->name('admin.logout');

// Pagina de Admin unde vezi tabelele (verifică login-ul în Controller)
Route::get('/admin', [GymController::class, 'admin'])->name('admin.page');