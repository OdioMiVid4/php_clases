<?php
/*Tema 12: Case y Break
Definición: 'switch - case' evalúa múltiples condiciones y ejecuta un bloque de código
según el caso. 'break' termina la ejecución de un caso. 
*/
$color = readline("Elija un color: ");
switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "azul":
        echo "El color azul";
        break;
    case "verde":
        echo "El color es verde";
        break;
    default:
        echo "Color no reconocido";
        break;
}

?>