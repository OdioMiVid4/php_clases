<?php
/*
Tema 13: Arrays (Arreglos)
Definición: Un array es una variable que puede almacenar varios valores en una sola estructura. 
*/

//Ejemplo 01

$frutas = array("manzana", "naranja", "plátano");
echo "Ejemplo 1: Primera fruta: " . $frutas[0] . "<br>"; // muestra "Primera fruta: manzana"
echo "Ejemplo 2: Segunda fruta: " . $frutas[1] . "<br>"; // muestra "Segunda fruta: naranja"
?>

<br>

<?php
/*Ejemplo 2: Array con letras (Arreglo indexado) */

//Definir un arreglo con letras

$letras = array("A", "B", "C", "D", "E");

//Usamos un ciclo foreach para recorrer el arreglo e imprimir cada letra
foreach ($letras as $letra) {
    echo "Letra: " . $letra . "<br>";
}
?>