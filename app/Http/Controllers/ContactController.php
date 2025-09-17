<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;       // <- Importa la mail class
use Illuminate\Support\Facades\Mail;  // <- Importa Mail Facade

class ContactController extends Controller
{
    public function show()
    {
        return view('contatti', [
            'titolo' => 'Contattaci'
        ]);
    }

    public function submit(Request $request)
    {
        // Validazione
        $validated = $request->validate([
            'email' => 'required|email',
            'messaggio' => 'required|string|max:1000',
        ]);

        // Invia la mail usando la classe ContactMail
        Mail::to('hello@example.com')->send(new ContactMail($validated['email'], $validated['messaggio']));

        // Redirect con messaggio di successo
        return redirect()->back()->with('success', 'Messaggio inviato con successo!');
    }
}
