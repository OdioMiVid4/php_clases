<?php
/*Ejemplo 2: Iterar sobre un arreglo indexado*/

//Definimos un arreglo indexado
$colores = array("Rojo", "Verde", "Azul", "Amarillo");

// Usamos foreach para recorrer el arreglo
foreach ($colores as $color) {
    echo "Color: " . $color . "\n" . "<br>";
}

?>

<br>

<?php
/* Ejemplo 3: Iterar sobre un arreglo asociativo */

// Definimos un arreglo asociativo
$persona = array(
    "Nombre" => "Smith",
    "Apellido" => "Joya",
    "Edad" => "23"
);



// Usamos foreach para recorrer el arreglo asociativo
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "\n" . "<br>";
}


?>