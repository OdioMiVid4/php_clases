<?php
/*Tema 11: Do-while
Definición: 'do-while' ejecuta un bloque de código al menos una vez y luego repite mientras la condición sea
verdadera.*/

$i = 1;
do {
    echo "Ejemplo 1: Iteración $i<br>"; // muestra Iteración 1, Iteración 2... hasta Iteración 5
    $i++;

} while ($i <= 5);

?>
<br>
<?php
/*Ejemplo 2: Imprimir una cadena de texto con un ciclo do...while*/
// Inicializamos la variable
$mensaje = "Hola, esta es una repetición: ";
$repeticiones = 1;

// Usamos un ciclo do...while para repetir el mensaje 5 veces
do {
    echo $mensaje . $repeticiones . "<br>";
    $repeticiones++; // Incrementamos el contador de repeticiones

} while ($repeticiones <= 5);
?>