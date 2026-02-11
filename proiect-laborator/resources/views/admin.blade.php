@extends('layouts.app')

@section('title', 'Panel Administrativ')

@section('content')
    <div class="card" style="background: #1a1a1a;">
        <h1 style="color: var(--primary);">Zona admin – acces restricționat (demo)</h1>
        <p>Bun venit în panoul de control al sistemului GymPro. Aici puteți gestiona activitatea sălii.</p>
        
        <div style="display: flex; gap: 20px; margin-top: 30px;">
            <div style="flex: 1; background: #333; padding: 20px; border-radius: 5px; text-align: center;">
                <h2 style="margin:0; color:var(--primary)">124</h2>
                <p style="margin:5px 0 0">Membri Activi</p>
            </div>
            <div style="flex: 1; background: #333; padding: 20px; border-radius: 5px; text-align: center;">
                <h2 style="margin:0; color:var(--primary)">8</h2>
                <p style="margin:5px 0 0">Antrenori de serviciu</p>
            </div>
            <div style="flex: 1; background: #333; padding: 20px; border-radius: 5px; text-align: center;">
                <h2 style="margin:0; color:var(--primary)">€ 4,200</h2>
                <p style="margin:5px 0 0">Încasări lună</p>
            </div>
        </div>

        <h3 style="margin-top: 30px;">Acțiuni rapide</h3>
        <button class="btn" style="background: #444;">Adaugă Membru Nou</button>
        <button class="btn" style="background: #444; margin-left: 10px;">Generează Raport</button>
    </div>
@endsection