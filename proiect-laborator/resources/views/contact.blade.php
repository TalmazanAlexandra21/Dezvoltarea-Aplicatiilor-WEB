@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="card">
        <h1>Contactează-ne</h1>
        <p>Ai întrebări despre abonamentele noastre? Echipa GymPro este aici să te ajute.</p>
        
        <div style="margin-top: 20px;">
            <p><strong>📍 Adresă:</strong> Str. Sportului Nr. 10, Chișinău</p>
            <p><strong>📞 Telefon:</strong> +373 60 000 000</p>
            <p><strong>✉️ Email:</strong> info@gympro.md</p>
        </div>

        <form style="margin-top: 30px; display: flex; flex-direction: column; gap: 10px;">
            <input type="text" placeholder="Numele tău" style="padding: 12px; background: #333; border: 1px solid #444; color: white; border-radius: 5px;">
            <textarea placeholder="Mesajul tău" rows="4" style="padding: 12px; background: #333; border: 1px solid #444; color: white; border-radius: 5px;"></textarea>
            <button type="button" class="btn">Trimite Mesaj</button>
        </form>
    </div>
@endsection