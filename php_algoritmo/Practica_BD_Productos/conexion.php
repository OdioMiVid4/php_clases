<?php 

$host = "localhost"; // Servidor
$usuario = "root";
$password = "";
$basededatos = "productos_bd"; // Cambiado a tu nueva base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $basededatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: productos_bd - " . $conexion->connect_error);
}

echo "✅ Conexión exitosa a la base de datos: productos_bd";

$conexion->close();

?>
