<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    // Pasul 4: Metoda pentru Home
    public function home() {
        return view('home');
    }

    // Pasul 4: Metoda pentru Despre
    public function about() {
        return view('about');
    }

    // Pasul 4: Metoda pentru Servicii (Pagina suplimentară pentru tema Gym)
    public function services() {
        return view('services');
    }

    // Pasul 4: Metoda pentru Contact
    public function contact() {
        return view('contact');
    }

    // Metoda pentru Login (Necesară pentru a repara eroarea ta)
    public function login() {
        return view('login');
    }

    // Pasul 8: Metoda pentru Admin (Obligatoriu)
    public function admin() {
        return view('admin');
    }
}