<?php
class Database
{
    private $host = "localhost";
    private $dbname = "gestion_empleados"; // tu base de datos
    private $user = "root";
    private $pass = "";
    public $conn;

    public function connect()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch (PDOException $e) {
            return "Error de conexión: " . $e->getMessage();
        }
    }
}
?>