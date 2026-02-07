<?php

use Illuminate\Support\Facades\Route;

// Pct 2, 3, 11, 13
Route::get('/', function () {
    // Pct 13: Link-ul către contact folosind numele rutei
    return '<h1>Pagina Principala</h1> <a href="'.route('contact.page').'">Mergi la contact</a>';
});

// Pct 10, 11
Route::get('/about', function () {
    return view('about');
});

// Pct 12 (Atribuire nume)
Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');

// Pct 4, 5
Route::post('/login', function () {
    return "Autentificare...";
});

// Pct 6, 7
Route::get('/user/{id}', function ($id) {
    return "Profil utilizator cu ID = " . $id;
});

// Pct 8, 9
Route::get('/article/{category}/{id}', function ($category, $id) {
    return "Categorie: $category, ID Articol: $id";
});

// Pct 14, 15, 16 (Grup admin + Middleware)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () { return "Admin Dashboard"; });
    Route::get('/users', function () { return "Admin Users"; });
    Route::get('/settings', function () { return "Admin Settings"; });
});