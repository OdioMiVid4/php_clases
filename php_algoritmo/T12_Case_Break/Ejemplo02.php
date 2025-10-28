<?php

//Ejemplo 2: Operaciones matematicas en consola usando switch, case y break
//Pedimos al usuario que ingrese los dos numeros y el operador 

echo"ingrese el primer numero: ";
$numero1 = trim(fgets(STDIN)); // Leer el primer numero desde la consola

echo"Ingrese el segundo numero: ";
$numero2 = trim(fgets(STDIN));

echo"Ingrese la operacion ";
$operacion = trim(fgets(STDIN));

switch ($operacion) {
    case "sumar":
        $resultado = $numero1 + $numero2;
        echo"El resultado de sumar $numero1 y $numero2 es: " . $resultado . PHP_EOL;
        break;
       
    case "restar":
        $resultado = $numero1 - $numero2;
        echo "El resultado de restar $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        echo "El resultado de multiplicar $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        break;
    case "dividir":
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "El resultado de dividir $numero1 entre $numero2 es: ". $resultado . PHP_EOL;
    }else {
        echo "No se puede dividir por cero." . PHP_EOL;
    }
    break;

    default:
    echo "Operacion no valida" . PHP_EOL;
    break;
}


?>