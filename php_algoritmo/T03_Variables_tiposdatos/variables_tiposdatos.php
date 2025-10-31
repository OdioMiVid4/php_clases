<?php
$edad = 25; // Variable de tipo entero
$precio = 19.99; // Variable de tipo flotante
$nombre = "Juan"; // Variable de tipo cadena
$es_estudiante = true; // Variable de tipo booleano

$colores = array("rojo", "verde", "azul"); // Variable de tipo array

//Declaración de una variable tipo objeto
class persona
{
    public $nombre;
    public $edad;
}
$persona = new persona(); // Creación de un objeto de la clase personas
$persona->nombre = "Maria";
$persona->edad = "22";

$nada = null; // Variable de tipo nulo

// Mostrar los valores y tipos de las variables
echo "Edad: " . $edad . "<br>";
echo "Precio: " . $precio . "<br>";
echo "Nombre: " . $nombre . "<br>";
echo "Es estudiante: " . ($es_estudiante ? "Sí" : "No") . "<br>";
echo "Colores: " . implode(", ", $colores) . "<br>";
//echo "Persona: Nombre - " . $persona->nombre . ", Edad - " . $persona->edad . "<br>";
echo "Persona: " . $persona->nombre . ", Edad - " . $persona->edad . "<br>";
echo "Nada: " . var_export($nada, true) . "<br>";



?>