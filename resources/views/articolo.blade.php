<!DOCTYPE html>
<html lang="it">
<head>
    <title>{{ $article['title'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('articoli') }}">Articoli</a> |
        <a href="{{ route('chi') }}">Chi siamo</a> |
        <a href="{{ route('contatti') }}">Contatti</a>
    </nav>

    <h1 class="mt-4">{{ $article['title'] }}</h1>
    <p><strong>Categoria:</strong> {{ $article['category'] }}</p>
    <p><strong>Descrizione:</strong> {{ $article['description'] }}</p>

    <a href="{{ route('articoli') }}" class="btn btn-secondary mt-3">← Torna agli articoli</a>

</body>
</html>
