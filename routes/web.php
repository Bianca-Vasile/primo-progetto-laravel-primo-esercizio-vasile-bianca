<?php



// codice mio


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articoli', function () {
    return view('articoli');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/chi-siamo', function () {
    $titolo = 'Chi Siamo';
    $descrizione = 'Siamo un team di sviluppatori appassionati di web development.';
    return view('chi-siamo', ['titolo' => $titolo, 'descrizione' => $descrizione]);
});
