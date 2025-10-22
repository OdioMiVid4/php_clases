<?php
$a=5;
$b= 10;

//Operadores Aritméticos
$suma = $a + $b; //Suma
$resta = $b - $a; //Resta
$producto = $a * $b; //Multiplicación
$division = $b / $a; //División

echo "La suma es: " . $suma . "<br>"; //Suma
echo "La resta es: " . $resta . "<br>"; //Resta
echo "El producto es: " . $producto . "<br>"; //Multiplicación
echo "La division es: ". $division ."<br>";

?>

<?php
/*Determina el total a pagar, considerando que el salario por mes es 3500 y al trabajador se le debe de 14 meses*/
$salario_mensual = 3500;
$meses_trabajados = 14;
$trabajador = "Juan Perez";

$total_a_pagar = $salario_mensual * $meses_trabajados;

echo "El total a pagar a " . $trabajador . " es: $" . $total_a_pagar . "<br>";
?>

