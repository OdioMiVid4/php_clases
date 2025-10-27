<?php
function saludar($nombre){
    return"Hola $nombre";
}

echo saludar("Juan");
?>

<?php
/*Ejemplo 2: Funcion que suma dos numeros*/
//Definir una funcion para sumar dos numeros 

function sumar ($a , $b) {
    return $a + $b;
}

$resultado = sumar(5,5);
echo "La suma de 5 y 5 es: " . $resultado;

?>

<?php
/* Elabora un algoritmo PHP utilizando funciones que permita determinar el area de un triangulo*/

function Area ($base , $altura ){
    return $base * $altura / 2; 

}

$base = readline("Ingrese la base");
$altura = readline("Ingrese la altura");


echo "El Area es: ". Area( $base , $altura );

?>