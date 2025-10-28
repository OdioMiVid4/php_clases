<?php
$host = "localhost"; //o la IP del servidor de base de datos
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //contraseña de MySQL
$base_datos = "gestion_empleados"; //nombre de la base de datos

//Crear conexion
$conn = new mysqli($host, $usuario, $password, $base_datos);

// Verificar conexion 

if ($conn->connect_error) {
    die("Error de conexion gestion_empleados: " . $conn->connect_error);

}
echo "Conexion exitosa a la base de datos gestion_empleados!...";
echo"Bienvenido";

?>