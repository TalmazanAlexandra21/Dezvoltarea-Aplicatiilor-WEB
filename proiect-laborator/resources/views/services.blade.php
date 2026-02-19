@extends('layouts.app')

@section('title', 'Servicii')

@section('content')
    <h1 style="text-align: center; color: var(--primary);">ALEGE ABONAMENTUL TĂU</h1>
    <div class="card-container">
        @foreach($abonamente as $abonament)
            <div class="card" style="{{ $abonament['recomandat'] ? 'border-top: 5px solid gold;' : '' }}">
                <h2>{{ $abonament['nume'] }}</h2>
                <p style="font-size: 24px; color: var(--primary); font-weight: bold;">{{ $abonament['pret'] }} / lună</p>
                
                @if($abonament['recomandat'])
                    <p style="color: gold; font-weight: bold;">⭐ RECOMANDAT</p>
                @endif
                
                <ul style="padding-left: 20px;">
                    <li>Acces nelimitat</li>
                    <li>Vestiar individual</li>
                    <li>Evaluare inițială</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection