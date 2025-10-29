<?php
$host = 'localhost';  // Cambia por tu host
$db = 'gestion_empleados';    // Cambia por el nombre de tu base de datos
$user = 'root';       // Cambia por tu usuario
$pass = '';           // Cambia por tu contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>