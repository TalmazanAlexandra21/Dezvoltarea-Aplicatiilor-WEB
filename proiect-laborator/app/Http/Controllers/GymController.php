<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GymController extends Controller
{
    public function home() {
        // Aceasta repara eroarea: Undefined variable $infoSală
        $infoSală = "Cea mai modernă sală de fitness din oraș, dotată cu echipamente de ultimă generație.";
        return view('home', compact('infoSală'));
    }

    public function services() {
        // Aceasta repara eroarea: Undefined array key "recomandat"
        // Am adaugat cheia 'recomandat' pentru fiecare abonament
        $abonamente = [
            ['nume' => 'Fitness Basic', 'pret' => '30 €', 'recomandat' => false],
            ['nume' => 'Premium Gym', 'pret' => '50 €', 'recomandat' => true],
            ['nume' => 'VIP Coaching', 'pret' => '90 €', 'recomandat' => false]
        ];
        return view('services', compact('abonamente'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function admin() {
        return view('admin');
    }

    // Aceasta repara eroarea: Call to undefined method GymController::login()
    public function login() {
        return view('login');
    }
}