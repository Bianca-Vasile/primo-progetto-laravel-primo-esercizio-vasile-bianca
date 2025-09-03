<!DOCTYPE html>
<html lang="it">
<head>
    <title>Lista Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <x-navbar />


    <h1 class="mt-4">Lista degli articoli</h1>

    <ul>
        @foreach ($articles as $index => $article)
    <x-card 
        :route="route('articolo', ['id' => $index])" 
        :title="$article['title']" 
        :category="$article['category']" 
    />
       @endforeach

    </ul>

</body>
</html>
