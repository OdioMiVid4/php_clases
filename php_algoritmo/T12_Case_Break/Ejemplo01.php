<?php
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