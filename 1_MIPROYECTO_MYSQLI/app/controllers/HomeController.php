<?php

require_once 'app/model/Database.php';

class HomeController
{
    public function index()
    {
        $db = new Database();
        $resultado = $db->connect();
        if ($resultado instanceof mysqli) {
            $mensaje = "Conexión exitosa a la base de datos con MySQLi.";
            $resultado->close(); // cerrar conexión
        } else {
            $mensaje = "Error $resultado";
        }
        require_once 'app/views/home.php';
    }
}
?>