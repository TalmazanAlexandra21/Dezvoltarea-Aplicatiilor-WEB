@extends('layouts.app')

@section('title', 'Acasă - GymPro')

@section('content')
<div style="
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
    url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=2070&auto=format&fit=crop'); 
    background-size: cover; 
    background-position: center; 
    height: 90vh; 
    display: flex; 
    flex-direction: column; 
    justify-content: center; 
    align-items: center; 
    text-align: center; 
    color: white; 
    padding: 0 20px;">
    
    <h1 style="
        font-size: 4rem; 
        text-transform: uppercase; 
        margin-bottom: 20px; 
        color: #ff3131; 
        text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        font-weight: 900;">
        Transformă-ți Corpul
    </h1>
    
    <p style="
        font-size: 1.5rem; 
        max-width: 700px; 
        line-height: 1.6; 
        margin-bottom: 40px; 
        color: #ddd;">
        {{ $infoSală }}
    </p>

    <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: center;">
        <a href="{{ route('services.page') }}" style="
            background: #ff3131; 
            color: white; 
            padding: 15px 40px; 
            text-decoration: none; 
            font-weight: bold; 
            border-radius: 50px; 
            text-transform: uppercase; 
            transition: 0.3s;
            box-shadow: 0 4px 15px rgba(255, 49, 49, 0.4);">
            Vezi Abonamente
        </a>
        <a href="/about" style="
            background: transparent; 
            color: white; 
            padding: 15px 40px; 
            text-decoration: none; 
            font-weight: bold; 
            border-radius: 50px; 
            text-transform: uppercase; 
            border: 2px solid white;
            transition: 0.3s;">
            Despre Noi
        </a>
    </div>
</div>

<div style="background: #111; padding: 60px 20px; text-align: center; color: white;">
    <h2 style="color: #ff3131; text-transform: uppercase; margin-bottom: 40px;">De ce să alegi GymPro?</h2>
    <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
        <div style="flex: 1; min-width: 250px; padding: 20px; background: #222; border-radius: 10px;">
            <h3 style="color: #ff3131;">Echipament Top</h3>
            <p style="color: #888;">Dispunem de cele mai noi aparate pentru forță și cardio.</p>
        </div>
        <div style="flex: 1; min-width: 250px; padding: 20px; background: #222; border-radius: 10px;">
            <h3 style="color: #ff3131;">Antrenori Pro</h3>
            <p style="color: #888;">Experți gata să te ajute să-ți atingi obiectivele rapid.</p>
        </div>
        <div style="flex: 1; min-width: 250px; padding: 20px; background: #222; border-radius: 10px;">
            <h3 style="color: #ff3131;">Program Flexibil</h3>
            <p style="color: #888;">Suntem deschiși de dimineața devreme până târziu în noapte.</p>
        </div>
    </div>
</div>
@endsection