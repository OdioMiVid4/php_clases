<?php
$productos = [
    [
        "codigo" => "P001",
        "descripcion" => "Laptop Lenovo Ideapad 3",
        "cantidad" => 10,
        "precio" => 2200,
    ],

    [
        "codigo" => "P002",
        "descripcion" => "Mouse inalambrico Logitech M170",
        "cantidad" => 25,
        "precio" => 60,
    ],

    [
        "codigo" => "P003",
        "descripcion" => "Teclado Redragon Kumara",
        "cantidad" => 15,
        "precio" => 180,
    ],

    [
        "codigo" => "P004",
        "descripcion" => "Monitor Samsung 24'' LED",
        "cantidad" => 8,
        "precio" => 750,
    ]
];

//Mostramos contenido en una tabla

echo"<h3>Listado de Productos</h3>";
echo"<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background-color:#f2f2f2;'
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio (S/)</th>
        <th>total (S/)</th>
        </tr>";

        $totalGeneral = 0;

        foreach ($productos as $producto) {
            $total = $producto["cantidad"] * $producto["precio"];
            $totalGeneral += $total;

            echo "<tr>
                    <td>{$producto['codigo']}</td>
                    <td>{$producto['descripcion']}</td>
                    <td>{$producto['cantidad']}</td>
                    <td>{$producto['precio']}</td>
                    <td>$total</td>
                    </tr>";

            echo "<tr style='font-weight:bold; background-color:#d9edf7;'>
                    <td colspan='4' align='right'>Total General:</td>
                    <td> S/ $totalGeneral</td>
                    </tr>";

            echo "</table>";

        }



?>