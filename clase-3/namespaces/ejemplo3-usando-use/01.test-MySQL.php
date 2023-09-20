<?php
// Registramos un alias para la clase Conexion de MySQL.
use App\Database\MySQL\Conexion as MySQL;

require_once __DIR__ . '/classes/MySQL/Conexion.php';

$conexion = new MySQL;