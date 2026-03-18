@extends('layouts.app')

@section('content')
<div style="padding: 40px; background: #0b0b0b; min-height: 100vh; color: white;">
    <h1 style="text-align:center; color:#ff3131; margin-bottom:40px; text-transform: uppercase; letter-spacing: 2px;">Panou Administrare Membri</h1>

    @php 
    $tabs = [
        ['t' => 'Fitness Basic', 'd' => $basic,   'c' => '#ff3131', 'p' => 'p1'],
        ['t' => 'Premium Gym',   'd' => $premium, 'c' => '#ffdb15', 'p' => 'p2'],
        ['t' => 'VIP Coaching',  'd' => $vip,     'c' => '#00f2ff', 'p' => 'p3']
    ]; 
    @endphp

    @foreach($tabs as $tab)
    <div style="margin-bottom: 50px; background: #111; padding: 25px; border-radius: 10px; border-top: 4px solid {{ $tab['c'] }}; box-shadow: 0 4px 15px rgba(0,0,0,0.5);">
        
        <h2 style="color: {{ $tab['c'] }}; margin-top: 0;">Abonamente {{ $tab['t'] }}</h2>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px; color: #ffffff;"> <!-- Am setat color: #ffffff aici -->
            <thead>
                <tr style="text-align: left; border-bottom: 2px solid {{ $tab['c'] }}; color: #888; text-transform: uppercase; font-size: 12px;">
                    <th style="padding: 12px;">Nume Complet</th>
                    <th style="padding: 12px;">Adresa Email</th>
                    <th style="padding: 12px;">Telefon</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tab['d'] as $m)
                <tr style="border-bottom: 1px solid #222; transition: 0.3s;">
                    <!-- Textul de mai jos va fi alb (#fff) conform setării de pe tabel -->
                    <td style="padding: 12px;">{{ $m->nume_complet }}</td>
                    <td style="padding: 12px; color: #ccc;">{{ $m->email }}</td> <!-- Email un pic mai șters pentru ierarhie -->
                    <td style="padding: 12px;">{{ $m->telefon }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Zona de Paginare -->
        <div style="margin-top: 20px; color: white;">
            {{ $tab['d']->appends(request()->except($tab['p']))->links() }}
        </div>
    </div>
    @endforeach
</div>

<style>
    /* Mic truc pentru a face link-urile de paginare să arate bine pe fundal negru */
    .pagination { display: flex; list-style: none; padding: 0; }
    .page-item { margin: 0 5px; }
    .page-link { color: #ff3131; background: #222; border: 1px solid #333; padding: 5px 10px; text-decoration: none; }
    .page-item.active .page-link { background: #ff3131; color: white; border-color: #ff3131; }
</style>

@endsection