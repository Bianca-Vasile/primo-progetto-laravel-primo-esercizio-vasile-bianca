
<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    $blogName = "Il mio blog di esempio";
    return view('home', ['blogName' => $blogName]);
})->name('home');

// Articoli
Route::get('/articoli', function () {
    $articles = [
        ['title' => 'Primo articolo', 'category' => 'Tecnologia', 'description' => 'Introduzione alla tecnologia'],
        ['title' => 'Secondo articolo', 'category' => 'Viaggi', 'description' => 'La mia esperienza a Roma'],
        ['title' => 'Terzo articolo', 'category' => 'Cibo', 'description' => 'Ricette della nonna']
    ];
    return view('articoli', ['articles' => $articles]);
})->name('articoli');

// Articolo singolo
Route::get('/articolo/{id}', function ($id) {
    $articles = [
        ['title' => 'Primo articolo', 'category' => 'Tecnologia', 'description' => 'Introduzione alla tecnologia'],
        ['title' => 'Secondo articolo', 'category' => 'Viaggi', 'description' => 'La mia esperienza a Roma'],
        ['title' => 'Terzo articolo', 'category' => 'Cibo', 'description' => 'Ricette della nonna']
    ];

    if (!isset($articles[$id])) {
        abort(404); // articolo non esiste
    }

    $article = $articles[$id];
    return view('articolo', ['article' => $article]);
})->name('articolo');

// Chi sono
Route::get('/chi-sono', function () {
    return view('chi');
})->name('chi');

// Contatti
Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

