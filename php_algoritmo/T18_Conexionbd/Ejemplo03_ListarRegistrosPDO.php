<?php
$host = "localhost"; //o la IP del servidor de base de datos
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //contraseña de MySQL
$base_datos = "gestion_empleados"; //nombre de la base de datos

try {
    //Crear conexion usando PDO
    $conn = new PDO("mysql:host=$host; dbname=$base_datos;charset=utf8", $usuario, $password);
    //Establecer el modo de error de PDO a excepcion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Conexion a la base de datos exitosa</h3><br>";

    // Preparar y ejecutar la consulta Sql
    $sql = "SELECT P.idempleado, p.dni, P.nombres, P.apellidos, P.direccion, P.telefono, C.nombrecargo
    FROM empleado P, cargo C
    WHERE C.id=P.cargo_id";

    //Ejecutar la consulta y obtener el conjunto de resultados
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Verificar si hay resultados
    if ($stmt->rowCount() > 0) {
        // Mostrar tabla HTML
        echo "<h3>Lista de Empleado</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr style='background-color:#f2f2f2;'>
    
        <th>ID</th>
        <th>dni</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Cargos</th>
    </tr>";

        // Recorrer los resultados
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
        echo "<p> No se encontraron registros en la tabla clientes.</p>";
    }
}

?>