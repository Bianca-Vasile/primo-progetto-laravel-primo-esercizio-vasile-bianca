<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/articoli', function () {
    return view('articoli');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});


