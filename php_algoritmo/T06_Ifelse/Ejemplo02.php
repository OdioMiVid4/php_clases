<?php
// La empresa PANDABID requiere tener una lista de sus 10 primeros productos
// mostrando precio, descripción y ofertas. Implementado con if y else anidados.

$productos = [
    ["nombre" => "Auriculares Bluetooth", "precio" => 120, "oferta" => true],
    ["nombre" => "Smartwatch Deportivo", "precio" => 180, "oferta" => false],
    ["nombre" => "Teclado Mecánico RGB", "precio" => 250, "oferta" => true],
    ["nombre" => "Mouse Inalámbrico", "precio" => 80, "oferta" => false],
    ["nombre" => "Cargador Rápido 25W", "precio" => 60, "oferta" => true],
    ["nombre" => "Cable USB-C Reforzado", "precio" => 35, "oferta" => false],
    ["nombre" => "Altavoz Portátil", "precio" => 220, "oferta" => true],
    ["nombre" => "Power Bank 20000mAh", "precio" => 150, "oferta" => false],
    ["nombre" => "Pantalla LED 24''", "precio" => 480, "oferta" => true],
    ["nombre" => "Soporte para Celular", "precio" => 25, "oferta" => false],
];

echo "Lista de Productos PANDABID:\n\n";

foreach ($productos as $producto) {
    echo "Producto: {$producto['nombre']}\n";
    echo "Precio: S/ {$producto['precio']}\n";

    // if y else anidados
    if ($producto['oferta']) {
        if ($producto['precio'] >= 300) {
            echo "Oferta especial: 20% de descuento + envío gratis\n";
        } elseif ($producto['precio'] >= 100) {
            echo "Oferta: 10% de descuento\n";
        } else {
            echo "Oferta: 5% de descuento\n";
        }
    } else {
        if ($producto['precio'] >= 300) {
            echo "Producto premium sin oferta actual\n";
        } elseif ($producto['precio'] >= 100) {
            echo "Producto estándar - revisa pronto las promociones\n";
        } else {
            echo "Producto económico - sin descuento\n";
        }
    }

    echo "-------------------------------\n";
}
?>
