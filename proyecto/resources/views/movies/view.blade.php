@extends('layouts.main')

<?php
// Noten que podemos usar variables en el segundo parámetro del @section
?>
@section('title', $movie->title)

@section('content')
<article>
    <h1 class="mb-3">{{ $movie->title }}</h1>

    <div class="row mb-3">
        <div class="col-8">
            <dl>
                <dt>Fecha de Estreno</dt>
                <dd>{{ $movie->release_date }}</dd>
                <dt>Precio</dt>
                <dd>$ {{ $movie->price }}</dd>
            </dl>
        </div>
        <div class="col-4"><!-- Acá va a ir la imagen --></div>
    </div>

    <h2>Sinopsis</h2>

    <div>{{ $movie->synopsis }}</div>
</article>
@endsection