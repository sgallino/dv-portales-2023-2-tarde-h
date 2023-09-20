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

Route::get('/admin/peliculas', [\App\Http\Controllers\AdminMoviesController::class, 'index']);