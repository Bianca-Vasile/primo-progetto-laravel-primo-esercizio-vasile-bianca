<x-layout :title="$article['title']">
    <h1>{{ $article['title'] }}</h1>
    <p><strong>Categoria:</strong> {{ $article['category'] }}</p>
    <p>{{ $article['description'] }}</p>
</x-layout>
