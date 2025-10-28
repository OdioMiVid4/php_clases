<?php
$host = "localhost"; //o la IP del servidor de base de datos
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //contraseña de MySQL
$base_datos = "gestion_empleados"; //nombre de la base de datos

try {
    //Crear conexion usando PDO
    $conexion = new PDO("mysql: host=$host; dbname=$base_datos", $usuario, $password);
    //Establecer el modo de error de PDO a excepcion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Conexion exitosa a la base de datos gestion_empleados</h3><br>";
    echo"<p>UsandoPDO</p><br>";
    echo "<p>bienvenido</p><br>";
} catch (PDOException $e) {
    echo "Error de conexion gestion_empleados: " . $e->getMessage() . "";
}



?>