@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="card">
        <h1 style="color: var(--primary);">Zona admin – acces restricționat (demo)</h1>
        <p>Bun venit, Administrator. Aici poți gestiona baza de date a clienților și încasările.</p>
        <div style="background: #333; padding: 20px; border-radius: 8px; margin-top: 20px;">
            <p><strong>Statistici azi:</strong> 45 persoane la sală / 12 abonamente noi.</p>
        </div>
    </div>
@endsection