<?php

class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;

    //Constuctor
    public function __construct($nombre, $apellido ,$edad, $direccion)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    //Metodo
    public function saludar()
    {
        return "Hola, me llamo $this->nombre $this->apellido y tengo $this->edad, vivo en $this->direccion.";
    } 

}

//Crear objeto 
$persona1 = new Persona("Smith","Joya","23","Chimbote");
echo $persona1->saludar();



?>