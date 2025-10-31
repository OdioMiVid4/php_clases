<?php
/*Ejemplo 4: Operaciones con arreglos numéricos*/

//Declaramos un arreglo con números (enteros y decimales)
$numeros = array(10, 25.5, 30, 42.75);

//Mostrar valores individuales 
echo "Primer numero: " . $numeros[0] . "<br>";
echo "Segundo numero" . $numeros[1] . "<br>";
echo "Tercer numero" . $numeros[2] . "<br>";
echo "Cuarto numero" . $numeros[3] . "<br><br>";

//Calcular la suma de todos los elementos
$suma = array_sum($numeros);

//Contar los salarios
$cantidad = count($numeros);

// Calcular el promedio
$promedio = $suma / $cantidad;

//Mostramos los resultados 

echo "Suma total: " . $suma . "\n" . "<br>";
echo "Cantidad de elementos: " . $cantidad . "\n" . "<br>";
echo "Promedio: " . number_format($promedio, 2) . "\n" . "<br><br>";

// Mostramos con Foreach

echo "Listado de numeros:<br> ";
foreach ($numeros as $num) {
    echo $num . "<br>";

}


?>