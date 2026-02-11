<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymPro - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <style>
        :root { --primary: #ff3131; --secondary: #1a1a1a; --text: #ffffff; --gray: #2d2d2d; }
        body { font-family: 'Roboto', sans-serif; margin: 0; background-color: #121212; color: var(--text); }
        h1, h2, h3 { font-family: 'Oswald', sans-serif; text-transform: uppercase; }
        
        /* Navigație */
        nav { background: var(--secondary); padding: 20px 10%; display: flex; justify-content: space-between; align-items: center; border-bottom: 3px solid var(--primary); }
        .logo { font-family: 'Oswald', sans-serif; font-size: 28px; color: var(--primary); font-weight: bold; }
        nav ul { list-style: none; display: flex; margin: 0; padding: 0; }
        nav ul li { margin-left: 25px; }
        nav ul li a { color: white; text-decoration: none; font-weight: bold; transition: 0.3s; text-transform: uppercase; }
        nav ul li a:hover { color: var(--primary); }

        /* Containere și Carduri */
        .container { max-width: 1100px; margin: 50px auto; padding: 20px; }
        .hero { text-align: center; padding: 60px 20px; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; border-radius: 15px; }
        .btn { background: var(--primary); color: white; padding: 12px 30px; border: none; border-radius: 5px; text-decoration: none; display: inline-block; font-weight: bold; margin-top: 20px; transition: 0.3s; }
        .btn:hover { background: #cc0000; transform: scale(1.05); }
        .card { background: var(--gray); padding: 30px; border-radius: 10px; border-left: 5px solid var(--primary); margin-top: 20px; }
        
        footer { text-align: center; padding: 30px; background: var(--secondary); margin-top: 50px; color: #777; }
    </style>
</head>
<body>
    <nav>
        <div class="logo">GYM<span style="color:white">PRO</span></div>
        <ul>
            <li><a href="{{ route('home') }}">Acasă</a></li>
            <li><a href="{{ route('about.page') }}">Despre</a></li>
            <li><a href="{{ route('services.page') }}">Servicii</a></li>
            <li><a href="{{ route('contact.page') }}">Contact</a></li>
            <li><a href="{{ route('admin.page') }}" style="color: var(--primary)">Admin</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2026 GYM PRO Management System
    </footer>
</body>
</html>