@extends('layouts.app')

@section('title', 'Panou Administrare')

@section('content')
<div style="background: #000; min-height: 100vh; padding: 40px 20px; color: white;">
    
    <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #ff3131; padding-bottom: 20px; margin-bottom: 40px;">
        <h1 style="margin: 0; color: #ff3131; text-transform: uppercase; letter-spacing: 2px;">Gestiune Membri</h1>
        <a href="{{ route('admin.logout') }}" style="background: #ff3131; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold; transition: 0.3s;">
            Log Out (Ieșire)
        </a>
    </div>

    @php 
        $categorii = [
            'Fitness Basic' => $basic, 
            'Premium Gym' => $premium, 
            'VIP Coaching' => $vip
        ]; 
    @endphp

    @foreach($categorii as $numePlan => $membri)
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                <div style="width: 10px; height: 30px; background: #ff3131;"></div>
                <h2 style="margin: 0; text-transform: uppercase; font-size: 1.5rem;">Abonament: {{ $numePlan }}</h2>
                <span style="background: #333; padding: 2px 12px; border-radius: 20px; font-size: 0.9rem; color: #ff3131;">
                    {{ $membri->count() }} membri
                </span>
            </div>

            <div style="overflow-x: auto; background: #111; border-radius: 10px; border: 1px solid #222;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="background: #1a1a1a; color: #888; text-transform: uppercase; font-size: 0.8rem;">
                            <th style="padding: 15px; border-bottom: 1px solid #222;">Nume Complet</th>
                            <th style="padding: 15px; border-bottom: 1px solid #222;">Email</th>
                            <th style="padding: 15px; border-bottom: 1px solid #222;">Telefon</th>
                            <th style="padding: 15px; border-bottom: 1px solid #222;">Data Nașterii</th>
                            <th style="padding: 15px; border-bottom: 1px solid #222;">Data Înscrierii</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($membri as $m)
                            <tr style="border-bottom: 1px solid #222; transition: 0.2s;" onmouseover="this.style.background='#161616'" onmouseout="this.style.background='transparent'">
                                <td style="padding: 15px; font-weight: bold;">{{ $m->nume_complet }}</td>
                                <td style="padding: 15px; color: #ccc;">{{ $m->email }}</td>
                                <td style="padding: 15px; color: #ccc;">{{ $m->telefon }}</td>
                                <td style="padding: 15px; color: #ccc;">{{ \Carbon\Carbon::parse($m->data_nasterii)->format('d.m.Y') }}</td>
                                <td style="padding: 15px; color: #ff3131;">{{ $m->created_at->format('d.m.Y') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="padding: 30px; text-align: center; color: #555; font-style: italic;">
                                    Nu există membri înscriși la acest tip de abonament.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

</div>
@endsection