<?php


$salario = array("2500", "2800", "3000", "3500", "3150", "1030");

echo "Primer salario: " . $salario[0] . "\n";
echo "Segundo salario" . $salario[1] . "\n";
echo "Tercer salario" . $salario[2] . "\n";
echo "Cuarto salario" . $salario[3] . "\n";
echo "Quinto salario" . $salario[4] . "\n";
echo "Sexto salario" . $salario[5] . "\n";

//Calcula la suma de todo los salarios
$suma = array_sum($salario);

//Contar los salarios
$cantidad = count($salario);

// Calcular el promedio
$promedio = $suma / $cantidad;

//Mostramos los resultados 

echo "Suma total: " . $suma . "\n";
echo "Hay en total: " . $cantidad . "\n";
echo "Promedio" . $promedio . "\n";

// Mostramos con Foreach

echo "Listado de numeros: ";



?>