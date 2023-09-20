<?php
/*
Blade nos permite en cualquier vista indicar que queremos que use algún
otro template de base (lo que solemos llamar un "layout").
Para esto, usamos la directiva @extends, que recibe como argumento la
ruta del archivo a partir de la carpeta [resources/views], sin extensión
y reemplazando las "/" por ".".

Por ejemplo, si tenemos un archivo en 
[resources/views/ruta/a/mi/layout.blade.php], la directiva sería:

    @extends('ruta.a.mi.layout')
*/
?>
@extends('layouts.main')

<?php
/*
Todo el contenido que dejamos suelto que está después del @extends va a 
quedar antes de lo que sea que extendimos.

Por eso, es esencial que los archivos que usamos para generar un layout
y que sean extensibles "cedan" con @yield ciertos espacios para que las
subvistas puedan usar.

Para ocupar un espacio cedido con @yield, tenemos que usar la directiva
@section(nombre) y @endsection.

Por ejemplo, si el template del layout hizo un @yield('contenido'),
entonces el section será:

    @section('contenido')
    Acá el contenido
    @endsection

Si el contenido del @section que queremos es solo un string, entnoces en
vez de abrir y cerrar @section, podemos pasarle un segundo parámetro como
contenido.

Es decir, que en vez de hacer:

    @section('title') Página Principal @endsection

Podemos hacer:

    @section('title', 'Página Principal')
*/
?>
@section('title', 'Página Principal')

@section('content')
<h1>Página Principal</h1>
@endsection
