@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div style="background: #000; padding: 100px 20px; color: white; text-align: center; min-height: 70vh;">
    <h1 style="color: #ff3131; text-transform: uppercase;">Contactează-ne</h1>
    
    <div style="display: flex; justify-content: center; gap: 50px; flex-wrap: wrap; margin-top: 50px;">
        <div style="background: #111; padding: 40px; border-radius: 15px; border: 1px solid #333; width: 300px;">
            <h3 style="color: #ff3131;">Locație</h3>
            <p>Strada Fitness nr. 10, Chișinău</p>
        </div>
        
        <div style="background: #111; padding: 40px; border-radius: 15px; border: 1px solid #333; width: 300px;">
            <h3 style="color: #ff3131;">Telefon</h3>
            <p>0789 430 011</p>
        </div>
        
        <div style="background: #111; padding: 40px; border-radius: 15px; border: 1px solid #333; width: 300px;">
            <h3 style="color: #ff3131;">Email</h3>
            <p>contact@gympro.md</p>
        </div>
    </div>

    <p style="margin-top: 50px; color: #888;">Program: Luni - Vineri: 06:00 - 23:00 | Sâmbătă - Duminică: 08:00 - 20:00</p>
</div>
@endsection