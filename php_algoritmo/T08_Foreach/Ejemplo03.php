<?php
/*Crear un arreglo asociativo de nombre producto: Debe de tener el codigo, descripcion, el precio, la cantidad y la fecha.*/

$producto = array(
    "CODIGO: " => " 1" . "<br>",
    "DESCRIPCION: " => " Hola Mundo" . "<br>",
    "PRECIO: " => " S/ 40.00" . "<br>",
    "CANTIDAD: " => " 4" . "<br>",
    "FECHA: " => " 13/01/2002" . "<br>",

);

foreach ($producto as $key => $value) {
    echo  $key . "" . $value . "\n";

}

?>