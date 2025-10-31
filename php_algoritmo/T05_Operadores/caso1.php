<?php
/*Operadores de Comparacion */
/*elabora un programa que permita determinar un salario de un empleado  considerando la horas trabajadas
 se tiene que ingresar por teclado las horas trabajadas y el valor por hora*/

$horas = readline("Ingrese las horas trabajadas: ");
$valorH = readline("Ingrese el valor por hora: ");

$total_a_pagar = $horas * $valorH;
echo "\n==== Resumen del Pago ====\n";
echo "Horas trabajadas: " . $horas . "\n";
echo "Pago por hora: S/" . $valorH . "\n";
echo"Se tiene que pagar al empleado: S/". number_format($total_a_pagar) ;


?>