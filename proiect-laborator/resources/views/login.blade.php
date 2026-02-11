@extends('layouts.app')

@section('title', 'Autentificare')

@section('content')
    <div class="card" style="max-width: 400px; margin: 50px auto; text-align: center;">
        <h1 style="color: var(--primary);">Acces Membri</h1>
        <p>Introdu datele tale pentru a intra în cont.</p>
        
        <form style="display: flex; flex-direction: column; gap: 15px; margin-top: 20px;">
            <input type="email" placeholder="Email" style="padding: 12px; background: #333; border: 1px solid #444; color: white; border-radius: 5px;">
            <input type="password" placeholder="Parolă" style="padding: 12px; background: #333; border: 1px solid #444; color: white; border-radius: 5px;">
            <button type="button" class="btn" onclick="alert('Demo: Autentificare în curs...')">Conectare</button>
        </form>
        
        <p style="margin-top: 20px; font-size: 14px; color: #777;">Ai uitat parola? Contactează recepția.</p>
    </div>
@endsection