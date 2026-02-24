<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <title>GymPro - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.header')
    @include('partials.menu')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>