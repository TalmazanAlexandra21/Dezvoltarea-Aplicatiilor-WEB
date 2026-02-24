@extends('layouts.app')

@section('title', 'Acasă')

@section('content')
    <h1 style="color: #ff3131;">Bun venit la sala noastră!</h1>
    <div class="card">
        <p>{{ $infoSală }}</p>
    </div>
@endsection