<?php
/*Operadores de comparación */
$esIgual = ($a == $b); // Igual a
$esDistinto = ($a != $b); // Distinto de
$esMayor = ($a > $b); // Mayor que
$esMenor = ($a < $b); // Menor que
$esMayorIgual = ($a >= $b); //Mayor o igual que
$esMenorIgual = ($a <= $b); //Menor o igual que

/*Imprimir */
echo"Es igual: " .($esigual ? 'Si' : 'No')."<br>";
echo"Es distinto: " .($esDistinto ? 'Si' : 'No').'<br>';
echo "Es mayor: " .($esMayor ? 'Si' : 'No').'<br>';
echo "Es menor: " .($esMenor ? 'Si' : 'No').'<br>';
echo "Es mayor o igual: " .($esMayorIgual ? 'Si' : 'No').'<br>';
echo "Es menor o igual: " .($esMenorIgual ? 'Si': 'No').'<br> <br>';

/*Evalua si el salario de los empleados son iguales, o evalua quien de ellos a ganado mas y cual es la diferencia  
El empleado A ha percibido durante el año 12500 y el empleado B 13500, Asi mismo el empleado C ha percibido 12500
y el empleado D 12500, se solicita comparar A y B para determinar quien ha ganado mas, luego comparar A y C 
para determinar si han ganado lo mismo*/

$a=12500;
$b=13500;
$c=12500;
$d=12500;
$e= "Empleado ";
$sueldo = $a + $b;
$sueldo2 = $a + $c;

echo"El empleado que mas ha ganado es: " . $e.($a > $b ? 'A' : 'B')." con una diferencia de: $" .abs($a - $b)."<br>";
echo"El empleado que mas ha ganado es: " . $e.($a > $c ? 'A' : ($a < $c ? 'C' : 'Ambos han ganado lo mismo'))." con una diferencia de: $" .abs($a - $c)."<br>";

/*Operadores logicos */
$yLogico = ($a > 5 && $b < 10); //AND y Logico
echo "El resultado del AND logico es: " .($yLogico ? 'Verdadero' : 'Falso')."<br>";

$oLogico = ($a > 5 || $b < 10); //OR o Logico
echo "El resultado del OR logico es: " .($oLogico ? 'Verdadero' : 'Falso')."<br>";


/*Operadores de asignacion */
$c = 10;
$b += 5; // Equivalente a $c = $c + 5
//echo "El valor de b es: " . $c + $b . "<br>";
$c -= 3; // Equivalente a $c = $c - 3
$c *= 2; // Equivalente a $c = $c * 2
$c /= 4; // Equivalente a $c = $c / 4
echo "El valor final de c es: " . $c . "<br> <br>";


/*Operadores de incremento y decremento */
$d = 5;
echo "d antes del incremento: " . $d . "<br>";
echo "d incremento de d (pre-incremento): " . (++$d) . "<br>"; //Pre-incremento
echo "d despues del decremento: " . (--$d) . "<br>"; //Pre-decremento
?>