<?php
/*Tema 16: Buscar elementos en una matriz
Definición: Se pueden buscar elementos dentro de una matriz utilizando 'foreach' o 'array_search'. */

$personas = array(
    array("nombre" => "Juan", "edad" => 25),
    array("nombre" => "Ana", "edad" => 30)
);
foreach ($personas as $persona) {
    if ($persona["nombre"] == "Ana") {
        // muestra "Persona encontrada: Ana"
        echo "Ejemplo 1: Persona encontrada: " . $persona["nombre"] . "<br>";
    }
}
?>