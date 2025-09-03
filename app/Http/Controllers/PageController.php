<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    protected array $articles = [
        ['title' => 'Primo articolo', 'category' => 'News', 'description' => 'Descrizione breve primo articolo'],
        ['title' => 'Secondo articolo', 'category' => 'Tutorial', 'description' => 'Descrizione breve secondo articolo'],
        ['title' => 'Terzo articolo', 'category' => 'Opinioni', 'description' => 'Descrizione breve terzo articolo'],
    ];

    public function home(): View
    {
        $blogName = 'Il Mio Blog Laravel';
        return view('home', ['blogName' => $blogName]);
    }

    public function articoli(): View
    {
        return view('articoli', ['articles' => $this->articles]);
    }

    public function articolo($id): View
    {
        if (!isset($this->articles[$id])) {
            abort(404);
        }

        return view('articolo', ['article' => $this->articles[$id]]);
    }

    public function chiSiamo(): View
    {
        return view('chi-siamo', ['titolo' => 'Chi siamo']);
    }

    public function contatti(): View
    {
        return view('contatti');
    }
}
