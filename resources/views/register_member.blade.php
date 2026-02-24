@extends('layouts.app')

@section('title', 'Înregistrare Membru')

@section('content')
<div style="background: #000; min-height: 80vh; padding: 50px 20px; display: flex; justify-content: center; align-items: center;">
    
    <div style="max-width: 500px; width: 100%; background: #111; padding: 40px; border-radius: 15px; color: white; border-top: 5px solid #ff3131; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
        
        <h2 style="text-align: center; color: #ff3131; text-transform: uppercase; margin-bottom: 10px; letter-spacing: 1px;">
            Înregistrare Membru Nou
        </h2>
        
        <p style="text-align: center; color: #ccc; margin-bottom: 30px; font-size: 1.1em;">
            Te înscrii pentru abonamentul: <br>
            <strong style="color: #fff; font-size: 1.2em; text-transform: uppercase;">
                {{ request('plan') ?? 'Abonament Nespecificat' }}
            </strong>
        </p>

        @if ($errors->any())
            <div style="background: #dc3545; color: white; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('member.store') }}" method="POST">
            @csrf

            <input type="hidden" name="tip_abonament" value="{{ request('plan') }}">

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #aaa;">Nume Complet:</label>
                <input type="text" name="nume_complet" placeholder="ex: Talmazan Alexandra" required 
                       style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #aaa;">Adresa Email:</label>
                <input type="email" name="email" placeholder="email@exemplu.com" required 
                       style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #aaa;">Număr Telefon:</label>
                <input type="text" name="telefon" placeholder="07XXXXXXXX" required 
                       style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>

            <div style="margin-bottom: 30px;">
                <label style="display: block; margin-bottom: 8px; color: #aaa;">Data Nașterii:</label>
                <input type="date" name="data_nasterii" required 
                       style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>

            <button type="submit" 
                    style="width: 100%; background: #ff3131; color: white; border: none; padding: 15px; font-weight: bold; font-size: 16px; border-radius: 5px; cursor: pointer; text-transform: uppercase; transition: 0.3s;">
                Confirmă Înscrierea
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('services.page') }}" style="color: #888; text-decoration: none; font-size: 0.9em;">
                ← Înapoi la lista de servicii
            </a>
        </div>
    </div>
</div>
@endsection