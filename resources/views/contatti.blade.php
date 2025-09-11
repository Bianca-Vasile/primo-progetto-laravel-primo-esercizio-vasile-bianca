@extends('components.layout')

@section('title', 'Contatti - Il Mio Blog Laravel')

@section('content')
    <h1>Contatti</h1>
    <p>Contattaci tramite questo form.</p>

    <form action="{{ route('contatti.invia') }}" method="POST" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="messaggio" class="form-label">Messaggio</label>
            <textarea id="messaggio" name="messaggio" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
@endsection
