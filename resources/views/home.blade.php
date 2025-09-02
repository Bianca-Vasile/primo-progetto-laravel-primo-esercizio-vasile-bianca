<!DOCTYPE html>
<html lang="it">
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('articoli') }}">Articoli</a> |
        <a href="{{ route('chi-siamo') }}">Chi siamo</a> |
        <a href="{{ route('contatti') }}">Contatti</a>
    </nav>

    <h1 class="mt-4">{{ $blogName }}</h1>
    <p>Benvenuti nel mio blog Laravel!</p>

</body>
</html>
