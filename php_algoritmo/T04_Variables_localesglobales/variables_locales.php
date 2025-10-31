<?php
//Variables locales
function Saludar()
{
    $mensaje = "Hola, esta es una variable local.";
    echo $mensaje;
}
Saludar();
echo $mensaje; // Esto generará un error porque $mensaje es una variable local

?>


<?php
// Variable globales
$saludo = "Hola, soy una variable global.";
function MostrarSaludo()
{
    global $saludo; // Declarar la variable global dentro de la función
    echo $saludo;
}
MostrarSaludo();//Esto imprimirá: Hola, soy una variable global.

?>
<br>
<br>

<?php
//Otro ejemplo de variable global: Realiazar la multiplicación de dos números y las demas operaciones
$a = 7;
$b = 8;

function Multiplicar()
{
    global $a, $b; // Declarar las variables globales dentro de la función
    $resultado = $a * $b;
    $resultadosuma = $a + $b;
    $resultadoresta = $a - $b;
    $resultadodivision = $a / $b;
    echo "El resultado de la multiplicación es: " . $resultado;
    echo "<br> El resultado de la suma es: " . $resultadosuma;
    echo "<br> Resta". $resultadoresta; 
    echo "<br>Division". $resultadodivision;
}
Multiplicar();


?>