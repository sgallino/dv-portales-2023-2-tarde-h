@extends('layouts.main')

@section('title', 'Listado de Películas')

@section('content')
<h1>Listado de Películas</h1>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Fecha de Estreno</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /*foreach($movies as $movie):
        ?>
        <tr>
            <td><?= $movie->movie_id;?></td>
            <td><?= $movie->title;?></td>
            <td><?= $movie->release_date;?></td>
            <td>$ <?= $movie->price;?></td>
            <td></td>
        </tr>
        <?php
        endforeach;*/
        ?>

        @foreach($movies as $movie)
        <tr>
            <?php
            /*
            A la hora imprimir valores de php en el HTML, en vez de usar los clásicos tags de php de:

                <?= $valor;?>

            Blade nos ofrece dos alternativas:
                
                {!! $valor !!}
                {{ $valor }}

            La primera ({!! !!}) es exactamente igual a la expresión común de php que mencionamos.
            El segundo ({{ }}) imprime los valores, pero antes los escapa con una función equivalente a
            htmlspecialchars(), para filtrar los caracteres especiales de HTML y transformarlos
            a sus equivalentes de entidades HTML.

            Salvo que queramos imprimir texto que contenga HTML exactamente como figura, siempre es 
            recomendable por seguridad usar {{ }}
            */
            ?>
            <td>{{ $movie->movie_id }}</td>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>$ {{ $movie->price }}</td>
            <td>
                <a href="{{ url('/peliculas/' . $movie->movie_id) }}" class="btn btn-primary">Ver</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
