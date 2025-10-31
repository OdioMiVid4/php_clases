<?php
/*Tema 15: Matrices (Arreglos multidimensionales)
Definición: Una matriz es un arreglo que contiene otros arreglos dentro de si.
*/

//Ejemplo 01

$personas = array(
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30)
);

echo "Ejemplo 1: Nombre de la primera persona: " . $personas[0]["nombre"] . "<br>"; // muestra "Juan"
?>

<br>

<?php
/*Ejemplo 02*/

$empleados = [
    [

        "nombre" => "Carlos",
        "cargo" => "Administrador",
        "sueldo" => "2500"
    ],
    [
        "nombre" => "Maria",
        "cargo" => "Secretaria",
        "sueldo" => "1800"
    ],
    [
        "nombre" => "Pedro",
        "cargo" => "Programador",
        "sueldo" => "3000"
    ],
];

foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado["nombre"] . "<br>"; 
    echo "Cargo: " . $empleado["cargo"] . "<br>";
    echo "Sueldo: ". $empleado["sueldo"] . "<br><br>";

}
?>