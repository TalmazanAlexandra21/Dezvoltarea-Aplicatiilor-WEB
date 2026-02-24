@extends('layouts.app')

@section('content')
<div style="background: #000; padding: 60px 20px; color: white; text-align: center; min-height: 100vh;">
    <h1 style="color: #ff3131; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 40px;">SERVICII ȘI ABONAMENTE</h1>
    
    @if(session('success'))
        <div style="background: #28a745; color: white; padding: 15px; border-radius: 5px; display: inline-block; margin-bottom: 30px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="display: flex; justify-content: center; align-items: stretch; gap: 20px; overflow-x: auto; padding-bottom: 20px;">
        @foreach($abonamente as $item)
            <div style="background: #111; padding: 30px; border-radius: 15px; border: 1px solid #333; min-width: 300px; max-width: 320px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h2 style="color: #ff3131; font-size: 1.5rem; margin-bottom: 15px;">{{ $item->nume_abonament }}</h2>
                    <p style="font-size: 2.5rem; font-weight: bold; margin-bottom: 5px;">{{ number_format($item->pret, 2) }} <span style="font-size: 1rem;">EUR</span></p>
                    <p style="color: #888; font-size: 0.9rem; margin-bottom: 20px; text-transform: uppercase;">{{ $item->durata_zile }} ZILE | {{ $item->categorie }}</p>
                    
                    <ul style="text-align: left; color: #ccc; margin: 20px 0; padding-left: 0; list-style: none; line-height: 2;">
                        <li>✔ Acces nelimitat la echipamente</li>
                        <li>✔ Vestiar inclus</li>
                        @if($item->pret >= 50) <li>✔ Acces zonă SPA</li> @endif
                        @if($item->pret >= 90) <li>✔ Antrenor personal inclus</li> @endif
                    </ul>
                </div>

                <a href="{{ route('member.register', ['plan' => $item->nume_abonament]) }}" 
                   style="display: block; background: #ff3131; color: white; padding: 15px; text-decoration: none; border-radius: 5px; font-weight: bold; text-transform: uppercase; transition: 0.3s; margin-top: 20px;">
                    ALEGE PLAN
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection