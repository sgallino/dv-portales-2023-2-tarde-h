<?php
// Supongamos que ahora necesitamos ambas conexiones.
require_once __DIR__ . '/classes/MySQL/Conexion.php';
require_once __DIR__ . '/classes/MongoDB/Conexion.php';

// ¿Qué pasa si trato de instanciar Conexion?
$conexion = new Conexion;

// Nunca llegamos a esa instrucción, siquiera. Ya falla php al tratar de
// definir 2 veces una clase con el mismo nombre.
// Para poder resolver esto de una manera práctica, necesitamos de los
// namespaces.