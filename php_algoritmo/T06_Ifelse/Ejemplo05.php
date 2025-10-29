<?php

/*Ejemplo 4:  La ama de casa va al supermercado y compra 6 productos: A, B, C, D, E y F.
Cada producto tiene un precio determinado que ella debe ingresar en el sistema. 

El programa debe:
1.Pedir el precio de cada producto.
2.Calcular el total a pagar.
3.Mostrar en pantalla el producto con su respectivo precio.
4.Comparar el total con su presupuesto de S/ 1000.00 y calcular cuanto dinero le sobra despues de la compra.
*/

// Presupuesto de la ama de casa
$presupuesto = 1000.00;


// Ingresar los precios de los productos
echo "Ingrese el precio del producto A :\n";

$A = (float) readline("");

echo "Ingrese el precio del producto B :\n";
$B = (float) readline("");

echo "Ingrese el precio del producto C :\n";
$C = (float) readline("");

echo "Ingrese el precio del producto D :\n";
$D = (float) readline("");

echo "Ingrese el precio del producto E :\n";
$E = (float) readline("");

echo "Ingrese el precio del producto F :\n";
$F = (float) readline("");

// Calcular la suma de los productos
$total_a_pagar = $A + $B + $C + $D + $E + $F;
// Calcular el dinero sobrante o faltante
$sobrante = $presupuesto - $total_a_pagar;

// Mostrar el resultado final
echo "===========================================";
echo "\n==========DETALLE DE LA COMPRA==========\n";
echo "===========================================\n";
echo "Producto A: S/ " . number_format($A, 2) . "\n";
echo "Producto B: S/ " . number_format($B, 2) . "\n";
echo "Producto C: S/ " . number_format($C, 2) . "\n";
echo "Producto D: S/ " . number_format($D, 2) . "\n";
echo "Producto E: S/ " . number_format($E, 2) . "\n";
echo "Producto F: S/ " . number_format($F, 2) . "\n";
echo "===========================================\n";
echo "Total a pagar: S/ " . number_format($total_a_pagar, 2) . "\n";
echo "Presupuesto disponible: S/ " . number_format($presupuesto, 2) . "\n";

// Validar si hay dinero sobrante o faltante
if ($total_a_pagar <= $presupuesto) {
    echo "Compra realizada con exito.\n";
    echo "El dinero sobrante es: S/ " . number_format($sobrante, 2) . "\n";
} else {
    $faltante = $total_a_pagar - $presupuesto;
    echo "¡Atencion! Se paso del presupuesto en S/ " . number_format($faltante, 2) . "\n";
}
?>