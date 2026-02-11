@extends('layouts.app')

@section('title', 'Servicii')

@section('content')
    <h1 style="text-align: center; margin-bottom: 40px;">Abonamente și <span style="color: var(--primary);">Servicii</span></h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <div class="card">
            <h2 style="color: var(--primary);">BASIC</h2>
            <p style="font-size: 24px; font-weight: bold;">29€ / lună</p>
            <ul>
                <li>Acces nelimitat Fitness</li>
                <li>Vestiar individual</li>
                <li>Acces aplicație mobilă</li>
            </ul>
            <a href="{{ route('contact.page') }}" class="btn">Alege Basic</a>
        </div>

        <div class="card" style="transform: scale(1.05); border-color: gold;">
            <h2 style="color: var(--primary);">PREMIUM</h2>
            <p style="font-size: 24px; font-weight: bold;">49€ / lună</p>
            <ul>
                <li>Acces 24/7 Fitness & Cardio</li>
                <li>Toate clasele de grup incluse</li>
                <li>1 Ședință cu antrenor personal</li>
            </ul>
            <a href="{{ route('contact.page') }}" class="btn">Alege Premium</a>
        </div>

        <div class="card">
            <h2 style="color: var(--primary);">VIP</h2>
            <p style="font-size: 24px; font-weight: bold;">79€ / lună</p>
            <ul>
                <li>Acces Full + SPA & Saună</li>
                <li>Plan nutrițional personalizat</li>
                <li>Prosoape și apă incluse</li>
            </ul>
            <a href="{{ route('contact.page') }}" class="btn">Alege VIP</a>
        </div>
    </div>
@endsection