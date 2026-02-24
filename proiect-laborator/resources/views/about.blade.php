@extends('layouts.app')

@section('title', 'Despre Noi')

@section('content')
    <div class="card">
        <h1 style="color: var(--primary);">Povestea GymPro</h1>
        <p>Fondată în 2010, GymPro a pornit de la o idee simplă: fitness-ul trebuie să fie accesibil, motivant și eficient pentru toată lumea.</p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 30px;">
            <div>
                <h3>Misiunea Noastră</h3>
                <p>Ne propunem să transformăm stilul de viață al membrilor noștri prin antrenamente personalizate și o comunitate de suport incredibilă.</p>
            </div>
            <div>
                <h3>Echipa</h3>
                <p>Avem peste 15 antrenori certificați internațional, specializați în bodybuilding, yoga, crossfit și nutriție sportivă.</p>
            </div>
        </div>
        
        <a href="{{ route('services.page') }}" class="btn">Vezi ce oferim</a>
    </div>
@endsection