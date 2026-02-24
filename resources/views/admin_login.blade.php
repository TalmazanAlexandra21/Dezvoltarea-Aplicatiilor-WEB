@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div style="background: #000; min-height: 80vh; display: flex; justify-content: center; align-items: center; color: white;">
    <div style="background: #111; padding: 40px; border-radius: 15px; border: 1px solid #ff3131; width: 100%; max-width: 400px; box-shadow: 0 0 20px rgba(255, 49, 49, 0.2);">
        <h2 style="text-align: center; color: #ff3131; text-transform: uppercase; margin-bottom: 30px;">Autentificare Admin</h2>
        
        @if(session('error'))
            <div style="background: rgba(255,0,0,0.2); color: #ff4444; padding: 10px; border-radius: 5px; text-align: center; margin-bottom: 20px; border: 1px solid #ff4444;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #888;">Utilizator:</label>
                <input type="text" name="username" required style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>
            <div style="margin-bottom: 30px;">
                <label style="display: block; margin-bottom: 8px; color: #888;">Parolă:</label>
                <input type="password" name="password" required style="width: 100%; padding: 12px; background: #222; border: 1px solid #444; color: white; border-radius: 5px; outline: none;">
            </div>
            <button type="submit" style="width: 100%; background: #ff3131; color: white; padding: 14px; border: none; font-weight: bold; border-radius: 5px; cursor: pointer; text-transform: uppercase; transition: 0.3s;">
                Intră în Panou
            </button>
        </form>
    </div>
</div>
@endsection