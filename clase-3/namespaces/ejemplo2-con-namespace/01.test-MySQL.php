<?php
// Vamos a probar que podamos instanciar la conexión de MySQL.
require_once __DIR__ . '/classes/MySQL/Conexion.php';

// Si buscamos la clase Conexion, no la va a encontrar.
// Está buscando la clase global llamada Conexion, que no existe en php,
// ni la creamos en este archivo.
// Existe la clase Conexion dentro del namespace App\Database\MySQL.
// Necesitamos indicarle a php que tiene que instanciar la clase usando
// la "ruta completa" o "Fully-Qualified Name" (FQN), como lo conocemos en
// php.
// $conexion = new Conexion; // No funciona :(

// Para indicar que el nombre es un FQN, tenemos que empezarlo con \
$conexion = new \App\Database\MySQL\Conexion;