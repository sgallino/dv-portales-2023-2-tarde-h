<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Las rutas son combinaciones de un verbo/método HTTP (ej: GET, POST, PUT,
// PATCH, DELETE, etc) con una URL que se toma a partir de la carpeta 
// public del framework, que se asocian a una "acción".
// Esa acción puede ser una función anónima ("callable"), o un array 
// que contenga el método de un Controller para asociar.

// Por ejemplo, acá abajo podemos ver la ruta que Laravel nos trae por
// defecto, que es la imprime la pantalla de bienvenida del framework.
// Route::get('/', function () {
//     // Las acciones DEBEN siempre retornar una respuesta, y no imprimir
//     // contenido en pantalla.
//     // Esa respuesta puede ser un template de HTML o un objeto JSON, o
//     // cualquier otra cosa.
//     // En nuestro caso, lo más común va a ser templates de HTML.
//     // Esos templates en Laravel son conocidos como "vistas", y están
//     // guardados en la carpeta [resources/views].
//     // Para retornar el contenido de un template, Laravel nos ofrece una
//     // función llamada view(), que recibe como argumento el nombre del 
//     // archivo del template, sin extensión (ni '.php' ni '.blade.php').
//     return view('welcome');
// });

// Route es la clase que sirve para registrar rutas en la aplicación.
// get() es el método para crear una ruta para el verbo HTTP de GET.
// '/' es la URL a partir de public que queremos registrar (sería la raíz).
// Y la función es la acción que renderiza la respuesta.

// Cambiamos la ruta para que utilice un controller.
// El array para el controller debe tener 2 posiciones:
// a. El nombre completo (o "FQN" - Fully-Qualified Name) de la clase  
//  como string.
// b. El nombre del método como string.
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

// Agregamos algunas rutas más.
Route::get('/quienes-somos', [\App\Http\Controllers\HomeController::class, 'about']);

Route::get('/peliculas/listado', [\App\Http\Controllers\MoviesController::class, 'index']);

/* 
Vamos a agregar ahora la ruta para ver el detalle de la película.
En Programación 2, probablemente hicieron uso del query string para pasar el id del registro. Algo como:

    peliculas-ver.php?id=2

Eso funciona, pero no es ideal desde el punto de vista de SEO. A los buscadores les gusta que cada página que tiene un contenido diferente tenga una URL única.
Lo que es mucho mejor, entonces, es que la URL sea algo así:

    peliculas/2

Donde 2 sería el id de la película.
Eso es muchísimo mejor para SEO, y es una URL mucho más amigable.
El tema, es que podemos tener miles y miles de películas, y no nos sirve la idea de crear una ruta por cada película. 
Así que necesitamos que ese segmento de la URL, donde ponemos el id, sea "dinámico". 
Ahí es donde entran los parámetros de ruta (route parameters).
Si queremos que un segmento de la URL sea dinámico, es decir, que acepte cualquier valor que le pasen, debemos indicarlo como un parámetro de ruta usando la sintaxis 
    
    {nombre}

Donde "nombre" puede ser cualquier string que quieran que sea válido como nombre de variable.

Por ejemplo, si ponemos una ruta:

    Route::get('/peliculas/{id}', ...);

Esa ruta va a matchear cualquiera de los siguientes ejemplos:

    /peliculas/1
    /peliculas/20
    /peliculas/hola
    /peliculas/saraza
*/
Route::get('/peliculas/{id}', [\App\Http\Controllers\MoviesController::class, 'view'])
    // Pedimos que el parámetro id sea un número para que sea aceptable.
    ->whereNumber('id');

Route::get('/peliculas/nueva', [\App\Http\Controllers\MoviesController::class, 'createForm']);
Route::post('/peliculas/nueva', [\App\Http\Controllers\MoviesController::class, 'createProcess']);

Route::get('/admin/peliculas', [\App\Http\Controllers\AdminMoviesController::class, 'index']);