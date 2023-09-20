<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

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

        // Logueamos las películas a la consola del Debugbar.
        // Debugbar::info($movies);
        
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

    public function createForm()
    {
        return view('movies/create');
    }

    /*
    # Recibiendo datos de la petición en Laravel
    En php común, para traer datos de la petición generalmente usamos las súper-globales de php, como $_GET, $_POST, $_COOKIES, etc.
    Si bien la mayoría de ellas funciona en Laravel, nos recomienda que las evitemos, y en su lugar usemos la clase Request que el framework provee.
    Para obtener la instancia de esa clase, podemos pedir que se inyecte en nuestro método del controller definiendo un parámetro que esté tipado como Request.
    Hay un par de razones por las que preferimos usar Request a las súper-globales:
    1. Las súper-globales, como su nombre indica, son globales.
    2. Las variables globales son muy difíciles de testear, mientras que la clase Request es mucho más fácil de testear.
    */
    public function createProcess(Request $request)
    {
        // Validamos los datos.
        // Laravel tiene muchas formas de validar nuestros datos.
        // La que vamos a usar es el método validate() del Request.
        // Este método hace lo siguiente:
        // - Valida los datos que llegan del form contra las reglas que le especificamos.
        // - Si los datos pasan la validación, nos retorna un array con los datos validados
        // - Si una o más de las validaciones falla, entonces Laravel:
        //      - Agrega los valores del formulario a una variable de sesión "flash".
        //      - Agrega los mensajes de error de la validación a una variable de sesión "flash".
        //      - Cancela la petición, y nos redirecciona a la página de la que venimos.
        // Solo necesitamos pasarle un array como parámetro con las "reglas" de validación.
        // Cada regla es una validación a aplicar sobre un campo.
        $request->validate([
            // 'title' => ['required', 'min:2'],
            'title' => 'required|min:2',
            'price' => 'required|numeric',
            'release_date' => 'required',
            'synopsis' => 'required',
        ]);

        // dd => dump and die.
        // Es una función que imprime todo el contenido de una variable, similar a print_r o var_dump, pero que evita bucles infinitos por objetos que tengan referencias circulares.
        // dd($request);

        // Pedimos todos los datos al objeto Request.
        // $data = $request->input();

        // Pedimos todos los datos excepto el _token.
        // $data = $request->except(['_token']);

        // Indicamos expresamente qué campos queremos traer.
        $data = $request->only(['title', 'price', 'release_date', 'synopsis', 'cover', 'cover_description']);

        // dd($data);
        // Forma simplificada.
        // Para poder esta forma, Laravel exige que definamos en el modelo la propiedad $fillable que liste en un array qué campos son aceptables llenarse de esta forma (llamada "asignación en masa").
        Movie::create($data);

        // Forma manual.
        // $movie = new Movie();
        // $movie->title = $data['title'];
        // $movie->price = $data['price'];
        // $movie->release_date = $data['release_date'];
        // $movie->synopsis = $data['synopsis'];
        // $movie->cover = $data['cover'];
        // $movie->cover_description = $data['cover_description'];
        // $movie->save();

        // Redireccionamos al usuario al listado.
        // Para redireccionar, retornamos la función redirect().
        return redirect('/peliculas/listado');
    }
}