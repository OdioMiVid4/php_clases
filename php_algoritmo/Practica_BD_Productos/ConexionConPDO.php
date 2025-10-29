<?php

$host = "localhost"; // Servidor
$usuario = "root";
$password = "";
$basededatos = "productos_bd"; // Cambiado a tu nueva base de datos

try {
    // Crear conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$basededatos;charset=utf8", $usuario, $password);

    // Configurar modo de error de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>Conexión exitosa con PDO a la base de datos: productos_bd!</h3><br>";
    echo "<p>BIENVENIDO</p><br>";

} catch (PDOException $e) {
    die("Error de conexión a la base de datos productos_bd: " . $e->getMessage());
}

?>
