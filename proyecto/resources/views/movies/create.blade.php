<?php
use Illuminate\Support\ViewErrorBag;

/** @var ViewErrorBag $errors */

/*
Todas las vista de Blade reciben automáticamente una variable $errors que contiene un objeto ViewErrorBag, que a su vez contiene los mensajes de error de validación, si es que los hay.

Ofrece varios métodos para poder leer o acceder a los errores.
*/
?>
@extends('layouts.main')

@section('title', 'Publicar una Nueva Película')

@section('content')
<h1 class="mb-3">Publicar una Nueva Película</h1>

@if($errors->any())
<p class="text-danger mb-3">Hay errores en los datos del formulario, por favor, revisalos para corregirlos.</p>
@endif

<form action="{{ url('/peliculas/nueva') }}" method="post">
    <?php
    /*
    Laravel se esfuerza para que sea dificultoso para nosotros crear un sitio inseguro.
    Con el alta vamos a encontrarnos con algunas de esas funcionalidades de Laravel, empezando por la protección contra CSRF (Cross-Site Request Forgery).
    Esto lo hace pidiendo que todas las peticiones que se hagan por POST deben incluir el token de verificación de CSRF.
    La forma más simple de incluir el token en el formulario es usando la directiva @csrf de Blade.
    Si el token no está, Laravel responde automáticamente con un 419 - Page Expired.
    */
    ?>
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input
            type="text"
            id="title"
            name="title"
            class="form-control"
        >
        <?php
        /*
        # Impresión de mensajes de error
        Hay dos maneras en que lo pueden manejar.
        1. Usando un if y preguntando directamente al objeto $errors por los datos.
        2. Usando la directiva @error y @enderror
        */
        ?>
        <?php
        // Forma 1
        /*
        @if($errors->has('title'))
        <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif
        */
        ?>
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Precio</label>
        <input
            type="text"
            id="price"
            name="price"
            class="form-control"
        >
        @error('price')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="release_date" class="form-label">Fecha de Estreno</label>
        <input
            type="date"
            id="release_date"
            name="release_date"
            class="form-control"
        >
        @error('release_date')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="synopsis" class="form-label">Sinopsis</label>
        <textarea
            id="synopsis"
            name="synopsis"
            class="form-control"
        ></textarea>
        @error('synopsis')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="cover" class="form-label">Portada</label>
        <input type="file" id="cover" name="cover" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cover_description" class="form-label">Descripción de la Portada</label>
        <input type="text" id="cover_description" name="cover_description" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Publicar</button>
</form>
@endsection