<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/articoli', function () {
    return view('articoli');
})->name('articoli');  

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');  

Route::get('/contatti', [ContactController::class, 'show'])->name('contatti');
Route::post('/contatti', [ContactController::class, 'submit'])->name('contatti.submit');
