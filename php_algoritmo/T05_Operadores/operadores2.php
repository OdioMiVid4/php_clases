<?php
/*Operaciones basicas con ingreso de valores por CLI*/
/*Leer el ingreso desde teclado  */
$num1 = (int) readline("Ingrese el primer numero: ");
$num2 = (int) readline("Ingrese el segundo numero: ");

//Realiazar las operaciones basicas
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;

//validamos la division entre 0
if ($num2 != 0) {
    $division = $num1 / $num2;
} else {
    $division = "Error: Division entre cero no permitida.";
}

//Mostrar los resultados
echo "Resultados de las operaciones basicas:\n";
echo "Suma: $num1 + $num2 = $suma\n";
echo "Resta: $num1 - $num2 = $resta\n";
echo "Multiplicacion: $num1 * $num2 = $multiplicacion\n";
echo "Division: $num1 / $num2 = $division\n";
?>