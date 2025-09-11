@extends('components.layout')

@section('title', 'Home - Il Mio Blog Laravel')

@section('content')
    <h1 class="test-title">Il Mio Blog Laravel</h1>

    <p>Benvenuti nel mio blog Laravel!</p>
@endsection
<h1 class="test-title">Il Mio Blog Laravel</h1>
<p>Benvenuti nel mio blog Laravel!</p>

<a href="{{ url('/articoli') }}" class="btn btn-primary mt-3">
    Vai agli Articoli
</a>
