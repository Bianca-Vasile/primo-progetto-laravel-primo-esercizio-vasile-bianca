<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Il Mio Blog Laravel')</title>
    
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Il Mio Blog</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/articoli') }}">Articoli</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/chi-siamo') }}">Chi Siamo</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contatti') }}">Contatti</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
