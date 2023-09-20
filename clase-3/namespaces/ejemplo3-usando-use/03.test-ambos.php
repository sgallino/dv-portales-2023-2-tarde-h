<?php
// En este caso, queremos suar dos clases que tienen el mismo nombre, 
// así que al menos una va a necesitar tener una alias personalizado.
use App\Database\MySQL\Conexion as MySQL;
use App\Database\MongoDB\Conexion as MongoDB;

require_once __DIR__ . '/classes/MySQL/Conexion.php';
require_once __DIR__ . '/classes/MongoDB/Conexion.php';

$conexionMySQL = new MySQL;
$conexionMongoDB = new MongoDB;
