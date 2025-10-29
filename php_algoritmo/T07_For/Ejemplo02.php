<?php
 $i=1;
 while ($i <= 10) {
    echo"El valor de i es: $i <br>";
    $i++;
 }

?>

<?php

//Usamos un ciclo while para imprimir los numeros del 1 al 100

while ($i <= 100) {
    echo "Numero: " . $i . "\n"."<br>";
    $i++; //Incrementamos $i en cada iteracion
}

?>

<?php

// Ejemplo 3: Sumar los numeros del 1 al 10 usando while

//Inicializamos las variables
$i = 1;
$suma =0;
//Usamos un ciclo while para sumar los numeros del 1 al 10
while ($i <= 10) {
    $suma += $i; //Sumar $i a $suma
    $i++; // Incrementamos $i
}

echo"La suma de los numeros del 1 al 10 es: ".$suma;

?>