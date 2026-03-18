<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GymController extends Controller
{
    // Pagini Publice
    public function index() { return view('home'); }
    public function about() { return view('about'); }
    public function services() { return view('services'); }
    public function contact() { return view('contact'); }

    // Înregistrare Membri
    public function showRegisterForm($plan = null) { return view('register', compact('plan')); }

    public function store(Request $request) {
        $data = $request->validate([
            'nume_complet' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'telefon' => 'required',
            'tip_abonament' => 'required',
            'data_nasterii' => 'required|date',
        ]);

        Member::create($data);
        return redirect()->route('home')->with('success', 'Te-ai înscris cu succes!');
    }

    // Admin & Auth
    public function showLoginPage() { 
        return Auth::check() ? redirect()->route('admin.page') : view('login'); 
    }

    public function login(Request $request) {
        $credentials = $request->validate(['email' => 'required|email', 'password' => 'required']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.page');
        }
        return back()->withErrors(['email' => 'Acces interzis.']);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function admin() {
        // Paginare separată pentru cele 3 tabele (Cerința Lab)
        $basic = Member::where('tip_abonament', 'Fitness Basic')->paginate(5, ['*'], 'p1');
        $premium = Member::where('tip_abonament', 'Premium Gym')->paginate(5, ['*'], 'p2');
        $vip = Member::where('tip_abonament', 'VIP Coaching')->paginate(5, ['*'], 'p3');

        return view('admin', compact('basic', 'premium', 'vip'));
    }

    // Cerința 5: API JSON
    public function getMembersApi() {
        return response()->json(Member::all(), 200);
    }
}