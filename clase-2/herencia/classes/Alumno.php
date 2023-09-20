<?php

class Alumno extends Persona
{
    protected string $carrera = "";

    // Si creamos un método en una subclase que tenga el mismo nombre que un método de su súperclase, estamos haciendo un "override".
    // Cuando hacemos un override de un método, estamos efectivamente descartando el método que heredamos, y creando uno nuevo de 0.
    public function presentarse(): string
    {
        // Al hacer el override, ya no podemos llamar al método $this->presentarse como hicimos antes, porque generamos un loop
        // infinito.
        // return $this->presentarse() . '. Estoy cursando la carrera ' . $this->carrera;

        // Podríamos copiar y pegar el código, pero no suena a una buena idea, por más que funcione.
        // return 'Hola, me llamo ' . $this->nombre . ' ' . $this->apellido . ' y nací el ' . $this->fechaNacimiento . '. Estoy cursando la carrera ' . $this->carrera;

        // La solución real, es pedirle a php que ejecute primero el presentarse de la clase Persona (nuestra súperclase), y 
        // luego concatenarle el nuevo contenido.
        // return Persona::presentarse() . '. Estoy cursando la carrera ' . $this->carrera;

        // El "::" es el operador de clases. Su nombre oficial es: operador de resolución de ámbito (scope resolution operator).
        // Se puede usar solo a continuación de un nombre de clase.
        // Hay 3 escenarios donde lo pueden ver:
        // 1. Para llamar a métodos o propiedades estáticas (static).
        // 2. Para llamar a métodos de la súperclase.
        // 3. Para usar constantes de una clase.

        // Por último, cuando queremos hacer referencia a la clase padre específicamente, en vez de llamarla por el nombre, podemos
        // hacerlo usando la keyword "parent".
        return parent::presentarse() . '. Estoy cursando la carrera ' . $this->carrera;
    }

    public function getCarrera(): string
    {
        return $this->carrera;
    }

    public function setCarrera(string $carrera): void
    {
        $this->carrera = $carrera;
    }
}