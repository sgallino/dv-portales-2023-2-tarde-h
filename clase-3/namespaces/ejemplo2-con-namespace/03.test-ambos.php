<?php
// Supongamos que ahora necesitamos ambas conexiones.
require_once __DIR__ . '/classes/MySQL/Conexion.php';
require_once __DIR__ . '/classes/MongoDB/Conexion.php';

$conexionMySQL = new \App\Database\MySQL\Conexion;
$conexionMongoDB = new \App\Database\MongoDB\Conexion;
