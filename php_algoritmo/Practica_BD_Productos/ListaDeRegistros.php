<?php
$host = "localhost"; // Servidor
$usuario = "root";
$password = "";
$basededatos = "productos_bd"; // Base de datos

try {
    // Conexión a la base de datos
    $conn = new PDO("mysql:host=$host;dbname=$basededatos;charset=utf8", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2 style='text-align:center; color:#2c3e50;'>Conexión a la base de datos 'productos_bd' exitosa</h2>";

    // Consulta SQL con JOIN
    $sql = "SELECT p.id_producto, p.nombre AS producto, p.precio, p.stock, 
                   c.nombre AS categoria, c.descripcion
            FROM producto p
            LEFT JOIN categoria c ON c.id_categoria = p.id_categoria";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Estilos CSS
    echo "
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 30px auto;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e8f0fe;
            transition: background-color 0.2s;
        }
        td {
            color: #333;
        }
        caption {
            caption-side: top;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
    </style>
    ";

    // Mostrar tabla
    if ($stmt->rowCount() > 0) {
        echo "<table>
                <caption>Lista de Productos</caption>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                </tr>";

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$fila['id_producto']}</td>
                    <td>{$fila['producto']}</td>
                    <td>$" . number_format($fila['precio'], 2) . "</td>
                    <td>{$fila['stock']}</td>
                    <td>{$fila['categoria']}</td>
                    <td>{$fila['descripcion']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center; color:#888;'>No se encontraron registros en la tabla de productos.</p>";
    }

} catch (PDOException $e) {
    echo "<p style='color:red; text-align:center;'>❌ Error de conexión: " . $e->getMessage() . "</p>";
}
?>
