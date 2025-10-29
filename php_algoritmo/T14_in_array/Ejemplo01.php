<?php
/*Tema 14: Buscar un elemento en un arreglo
Definición: Se puede buscar un elemento dentro de un array usando funciones como 'in_array'. */

$frutas = array("manzana", "naranja", "plátano");

if (in_array("naranja", $frutas)) {
    echo "Ejemplo 1: Naranja está en el array<br>"; // muestra "Naranja está en el array"
} else {
    echo "Ejemplo 2: Naranja no está en el array<br>";
}

?>