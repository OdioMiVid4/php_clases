<?php
/*Tema 10: While 
Definición: 'while' ejecuta un bloque de código mientras una condición sea verdadera.*/

$i = 1;
while ($i <= 5) {
    echo "Ejemplo 1: Iteración $i<br>";
    $i++;
}

?>
<br>
<?php

// Usamos un ciclo while para imprimir los números del 1 al 100 
$i = 1;
while ($i <= 100) {
    echo "Número: " . $i . "<br>";
    $i++; // Incrementamos $i en cada iteración 
}
?>
<br>
<?php

/*Ejemplo 3: Sumar los números del 1 al 10 usando while*/

// Inicializamos las variables 
$i = 1;
$suma = 0;

// Usamos un ciclo while para sumar los números del 1 al 10 
while ($i <= 10) {
    $suma += $i; // Sumar Si a $suma 
    $i++; // Incrementamos $i 

    // Mostramos el resultado 
    echo "La suma de los números del 1 al 10 es: " . $suma . "<br>";

}

?>