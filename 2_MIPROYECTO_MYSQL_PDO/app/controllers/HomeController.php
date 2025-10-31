<?php
require_once 'app/model/Database.php';

class HomeController
{
    public function index()
    {
        $db = new Database();
        $resultado = $db->connect();

        if ($resultado instanceof PDO) {
            $mensaje = "Conexion exitosa a la base de datos con PDO.";
            $resultado = null;
        } else {
            $mensaje = "Error $resultado";
        }

        require_once 'app/views/home.php';
    }
}
?>