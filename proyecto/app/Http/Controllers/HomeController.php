<?php

// TODO: Repasar qué es un namespace
namespace App\Http\Controllers;

class HomeController extends Controller
{
    // Acá adentro podemos definir todos los métodos que queramos :)
    public function index()
    {
        // Las acciones DEBEN siempre retornar una respuesta, y no imprimir
        // contenido en pantalla.
        // Esa respuesta puede ser un template de HTML o un objeto JSON, o
        // cualquier otra cosa.
        // En nuestro caso, lo más común va a ser templates de HTML.
        // Esos templates en Laravel son conocidos como "vistas", y están
        // guardados en la carpeta [resources/views].
        // Para retornar el contenido de un template, Laravel nos ofrece una
        // función llamada view(), que recibe como argumento el nombre del 
        // archivo del template, sin extensión (ni '.php' ni '.blade.php').
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
}