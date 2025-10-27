<?php
/*Crear un arreglo asociativo de nombre producto: Debe de tener el codigo, descripcion, el precio, la cantidad y la fecha.*/

$producto = array(
    "CODIGO"=> " 1",
    "DESCRIPCION: "=> " Hola Mundo",
    "PRECIO"=> " S/ 40.00",
    "CANTIDAD"=> " 4",
    "FECHA"=> " 13/01/2002",

    ) ;

foreach( $producto as $key => $value ) {
    echo"El Arreglo es: ". $key ."". $value ."\n";

}




?>