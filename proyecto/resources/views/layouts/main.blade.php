<?php
// Este archivo nos sirve de base para todas las demás vistas.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: DV Proyecto</title>
    <!-- <link rel="stylesheet" href="http://localhost/santiago/proyecto/public/css/bootstrap.min.css"> -->
    <!-- La función url() genera una URL absoluta al valor como string a partir de la carpeta [public/] del proyecto. -->
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= url('css/styles.css');?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DV Películas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('/');?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('/quienes-somos');?>">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('/peliculas/listado');?>">Películas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= url('/admin/peliculas');?>">Administración de Películas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container py-3">
            <?php
            /* 
            Acá es donde queremos que se pueda ubicar el contenido de cada pantalla.

            Para "ceder" este espacio a otros templates, necesitamos usar
            una directiva de Blade llamada @yield, la cual recibe como 
            argumento un nombre identificador.

            Por ejemplo:

                @yield('nombre')
            */
            ?>

            @yield('content')
        </main>
        <footer class="footer">
            <p>Da Vinci &copy; 2023</p>
        </footer>
    </div>
</body>
</html>