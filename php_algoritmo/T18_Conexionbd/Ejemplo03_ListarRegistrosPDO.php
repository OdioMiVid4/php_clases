<?php
$host = "localhost";
$puerto = "3307";
$usuario = "root";
$password = ""; // o déjalo vacío si no tiene
$base_datos = "gestion_empleados";

try {
    // Crear conexión usando PDO con puerto incluido
    $conn = new PDO("mysql:host=$host;port=$puerto;dbname=$base_datos;charset=utf8", $usuario, $password);

    // Activar modo de error por excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3 style='color:green;'>Conexión exitosa a la base de datos </h3><br>";

    // Tu consulta SQL
    $sql = "SELECT P.idempleado, P.dni, P.nombres, P.apellidos, P.direccion, P.telefono, C.nombrecargo
            FROM empleado P
            INNER JOIN cargo C ON C.id = P.cargo_id";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<h3>Lista de Empleados</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr style='background-color:#f2f2f2;'>
            <th>ID</th>
            <th>DNI</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Cargo</th>
        </tr>";

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
            <td>{$fila['idempleado']}</td>
            <td>{$fila['dni']}</td>
            <td>{$fila['nombres']}</td>
            <td>{$fila['apellidos']}</td>
            <td>{$fila['direccion']}</td>
            <td>{$fila['telefono']}</td>
            <td>{$fila['nombrecargo']}</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se encontraron registros en la tabla empleados.</p>";
    }

} catch (PDOException $e) {
    echo "<p style='color:red;'> Error de conexión: " . $e->getMessage() . "</p>";
}
?> 