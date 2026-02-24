<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Member;
use Illuminate\Support\Facades\Session;

class GymController extends Controller
{
    // Pagina Acasă
    public function home() {
        $infoSală = "La GymPro, nu vindem doar abonamente, construim caractere. Alătură-te celei mai mari comunități de fitness și începe evoluția ta chiar astăzi.";
        return view('home', compact('infoSală'));
    }

    // Pagina Despre Noi
    public function about() {
        return view('about');
    }

    // Pagina Contact
    public function contact() {
        return view('contact');
    }

    // Pagina Servicii - Ordonăm abonamentele de la cel mai mic preț la cel mai mare
    public function services() {
        $abonamente = Subscription::orderBy('pret', 'asc')->get(); 
        return view('services', compact('abonamente'));
    }

    // Formular înregistrare membru (afișare)
    public function registerMember() {
        return view('register_member');
    }

    // Salvare membru nou în DB
    public function storeMember(Request $request) {
        $request->validate([
            'nume_complet' => 'required',
            'email' => 'required|email',
            'telefon' => 'required',
            'data_nasterii' => 'required',
            'tip_abonament' => 'required'
        ]);

        Member::create($request->all());

        return redirect()->route('services.page')->with('success', 'Te-ai înscris cu succes!');
    }

    // --- LOGICA PENTRU ADMIN PRIVAT ---

    // Afișare formular Login Admin
    public function showLoginPage() {
        return view('admin_login');
    }

    // Procesare Login
    public function login(Request $request) {
        $username_corect = "admin";
        $parola_corecta = "sala2026"; 

        if ($request->username == $username_corect && $request->password == $parola_corecta) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.page');
        }

        return back()->with('error', 'Utilizator sau parolă incorectă!');
    }

    // Logout Admin
    public function logout() {
        Session::forget('admin_logged_in');
        return redirect()->route('home');
    }

    // Pagina de Admin (Protejată)
    public function admin() {
        // Verificăm dacă adminul este logat
        if (!Session::has('admin_logged_in')) {
            return redirect()->route('admin.login.page');
        }

        $basic = Member::where('tip_abonament', 'Fitness Basic')->get();
        $premium = Member::where('tip_abonament', 'Premium Gym')->get();
        $vip = Member::where('tip_abonament', 'VIP Coaching')->get();
        
        return view('admin', compact('basic', 'premium', 'vip'));
    }
}