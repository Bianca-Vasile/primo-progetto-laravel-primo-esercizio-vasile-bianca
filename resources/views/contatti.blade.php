@extends('components.layout')

@section('title', $titolo)

@section('content')

    <h1>{{ $titolo }}</h1>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contatti.submit') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="messaggio" class="form-label">Messaggio</label>
            <textarea name="messaggio" class="form-control" rows="4" required>{{ old('messaggio') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Invia richiesta</button>
    </form>

@endsection
