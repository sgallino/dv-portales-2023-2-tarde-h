<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {
        // Vamos a traer todos los registros de las películas usando nuestro modelo Movie de Eloquent.
        // Para este fin, Eloquent nos provee con un método all() que podemos utilizar.
        // all() retorna una Collection, que es una clase que representa un array, de objetos Movie.
        // Cada uno de esos objetos va a contener la información correspondiente a un registro.
        $movies = Movie::all();

        // echo "<pre>";
        // print_r($movies);
        // echo "</pre>";
        // die;
        
        // Por defecto, las vistas no heredan ninguna variable que esté definida en el controller.
        // Si queremos que reciban algún dato del controller, tenemos que expresamente proveérselo.
        // Esto se logra usando el segundo parámetro de la función view(), que es un array asociativo donde
        // las claves van a ser los nombres de las variables que se crean en la vista, y sus valores 
        // los datos asociados.
        return view('movies/index', [
            'movies' => $movies,
        ]);
    }

    // Si un método del controller está asociado a una ruta que tiene parámetros de ruta, como por ejemplo:
    //  /peliculas/{id}
    // Entonces podemos pedir que se nos haga entrega del valor que corresponde a ese parámetro de ruta, pidiéndolo como parámetro de la función.
    // El parámetro del método debe llamarse exactamente igual que el parámetro de la ruta (sin las llaves).
    // Por ejemplo, para la ruta mencionada, tendríamos que pedir un parámetro:
    //  $id
    public function view(int $id)
    {
        // Para buscar con Eloquent un registro por su PK, tenemos que usar el método find(). El cual recibe como argumento el valor que queremos buscar.
        // Si no existe, retorna null.
        // $movie = Movie::find($id);
        // Es común que si un registro no existe queremos que se muestra una página 404.
        // Es por eso que Eloquent tiene un método findOrFail() que hace precisamente eso. En vez de retorna null si no encuentra el registro, pide que se muestre un 404.
        // $movie = Movie::findOrFail($id);
        
        return view('movies/view', [
            'movie' => Movie::findOrFail($id),
        ]);
    }
}