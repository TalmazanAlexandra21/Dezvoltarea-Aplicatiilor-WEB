@extends('layouts.app')

@section('title', 'Despre Noi')

@section('content')
<div style="background: #000; padding: 100px 20px; color: white; text-align: center; min-height: 70vh;">
    <h1 style="color: #ff3131; text-transform: uppercase; font-size: 3rem;">Despre GYMPRO</h1>
    <p style="max-width: 800px; margin: 30px auto; font-size: 1.2rem; color: #ccc; line-height: 1.6;">
        Suntem mai mult decât o simplă sală de fitness. GymPro este comunitatea unde pasiunea întâlnește performanța. 
        Cu peste 10 ani de experiență, oferim echipamente de ultimă generație și antrenori dedicați pentru obiectivele tale.
    </p>
    <div style="margin-top: 50px;">
        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=800" alt="Gym" style="border-radius: 15px; width: 100%; max-width: 600px; border: 2px solid #ff3131;">
    </div>
</div>
@endsection