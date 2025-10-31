<?php
/*Ejemplo 3: Array con números (Arreglo indexado) */

// Declaramos un arreglo con números enteros y decimales

$numeros = array(10, 25.5, 30, 42.75);
// Mostramos valores individuales del arreglo
echo "Ejemplo 1: Primer número: " . $numeros[0] . "<br>"; // muestra "Primer número: 10"
echo "Ejemplo 2: Segundo número: " . $numeros[1] . "<br>"; // muestra "Segundo número: 25.5"
echo "Ejemplo 3: Tercer número: " . $numeros[2] . "<br>"; // muestra "Tercer número: 30"
echo "Ejemplo 4: Cuarto número: " . $numeros[3] . "<br>"; // muestra "Cuarto número: 42.75"

// También podemos recorrerlos con un bucle
echo "<br>Listado completo de números:<br>";
foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>