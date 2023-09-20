<?php
// Hacemos el alias con el mismo nombre de clase.
// use App\Database\MongoDB\Conexion as Conexion;

// Podemos también remover el as directamente.
use App\Database\MongoDB\Conexion;

require_once __DIR__ . '/classes/MongoDB/Conexion.php';

$conexion = new Conexion;