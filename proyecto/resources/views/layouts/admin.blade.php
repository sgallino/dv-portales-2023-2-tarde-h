<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Panel de Administración de DV Proyecto</title>
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= url('css/styles.css');?>">
</head>
<body>
    <div id="app">
        <div class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DV Películas</a>
            </div>
        </div>
        <main class="container py-3">
            <div class="row">
                <div class="col-3">
                    <ul>
                        <li>
                            <a class="nav-link" href="<?= url('/admin/peliculas');?>">Administración de Películas</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?= url('/');?>">Volver a la Home</a>
                        </li>
                    </ul>    
                </div>
                <div class="col-9">
                    @yield('contenido')
                </div>
            </div>
        </main>
        <footer class="footer">
            <p>Da Vinci &copy; 2023</p>
        </footer>
    </div>
</body>
</html>