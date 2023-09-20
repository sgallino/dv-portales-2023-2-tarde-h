<?php
require_once __DIR__ . '/classes/Persona.php';
require_once __DIR__ . '/classes/Alumno.php';

$alumno = new Alumno;

echo "<pre>";
print_r($alumno);
echo "</pre>";

$alumno->setNombre('Sara');
$alumno->setApellido('Za');
$alumno->setFechaNacimiento('1999-05-21');
$alumno->setCarrera('Diseño y Programación Web');

echo "<pre>";
print_r($alumno);
echo "</pre>";

echo $alumno->presentarse();