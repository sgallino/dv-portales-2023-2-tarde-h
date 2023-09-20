<?php
require_once __DIR__ . '/classes/Persona.php';

$persona = new Persona;

echo "<pre>";
print_r($persona);
echo "</pre>";

$persona->setNombre('Sara');
$persona->setApellido('Za');
$persona->setFechaNacimiento('2000-02-01');

echo "<pre>";
print_r($persona);
echo "</pre>";

echo $persona->presentarse();