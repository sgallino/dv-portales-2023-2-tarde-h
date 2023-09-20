<?php

class Persona
{
    protected string $nombre = "";
    protected string $apellido = "";
    protected string $fechaNacimiento = "";

    /**
     * Retorna un string con un saludo que incluye todos los datos de la clase.
     */
    public function presentarse(): string
    {
        return 'Hola, me llamo ' . $this->nombre . ' ' . $this->apellido . ' y nací el ' . $this->fechaNacimiento;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function getFechaNacimiento(): string
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(string $fechaNacimiento): void
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }
}