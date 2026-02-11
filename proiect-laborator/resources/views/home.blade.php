@extends('layouts.app')

@section('title', 'Bun venit')

@section('content')
    <div class="hero">
        <h1 style="font-size: 50px; margin-bottom: 10px;">Fără <span style="color:var(--primary)">scuze</span>, doar <span style="color:var(--primary)">rezultate</span></h1>
        <p style="font-size: 18px; color: #ccc;">Cea mai performantă sală de fitness din oraș. Echipamente de top și antrenori dedicați.</p>
        <a href="{{ route('services.page') }}" class="btn">Începe Acum</a>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 40px;">
        <div class="card">
            <h3>Program Flexibil</h3>
            <p>Suntem deschiși 24/7 pentru ca tu să te poți antrena oricând ai timp.</p>
        </div>
        <div class="card">
            <h3>Comunitate</h3>
            <p>Alătură-te sutelor de membri care și-au schimbat deja viața la noi.</p>
        </div>
    </div>
@endsection