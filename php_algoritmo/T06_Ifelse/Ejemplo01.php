<?php
$numero = readline ("Ingresa un número: "); //Solicita al usuario que ingrese un número

if ($numero > 0) {
    echo "Ejemplo 1: El número es positivo.<br>"; //Muestra "El numero es positivo."
} elseif ($numero < 0) {
    echo "Ejemplo 2: El número es negativo.<br>"; //Muestra "El numero es negativo."
} else {
    echo "Ejemplo 3: El número es cero.<br>"; //Muestra "El numero es cero."
}

?>

<!-- Determina cual de los dos productos es de mayor costo: El producto A 4500 y el producto B 5650 -->
 <br>

<?php

$productoA =4500;
$productoB = 5650;

if ($productoA > $productoB) {
    echo "Ejemplo 4: El producto A es más caro que el producto B.<br>";
}else {
    echo "Ejemplo 5: <br>";
}
?>

<?php
//Ejemplo 2: de codigo PHP para determinar el mes

//Solicitanos el numero del mes al usuario
$mes = 5; //Puedes cambiar este valor para probar otros meses

//Usamos una estructura if y else if para determinar el nombre del mes

$mes = readline ("Ingresa el número del mes (1-12): "); //Solicita al usuario que ingrese el número del mes

if ($mes == 1) {
    echo "Enero<br>";
} elseif ($mes == 2) {
    echo "Febrero<br>";
} elseif ($mes == 3) {
    echo "Marzo<br>";
} elseif ($mes == 4) {
    echo "Abril<br>";
} elseif ($mes == 5) {
    echo "Mayo<br>";
} elseif ($mes == 6) {
    echo "Junio<br>";
} elseif ($mes == 7) {
    echo "Julio<br>";
} elseif ($mes == 8) {
    echo "Agosto<br>";
} elseif ($mes == 9) {
    echo "Septiembre<br>";
} elseif ($mes == 10) {
    echo "Octubre<br>";
} elseif ($mes == 11) {
    echo "Noviembre<br>";
} elseif ($mes == 12) {
    echo "Diciembre<br>";
} else {
    echo "Número de mes inválido.<br>";
}
?>

