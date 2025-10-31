<?php
class Rectangulo
{
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return $this->ancho * $this->alto /2;

    }

}

$miRectangulo = new Rectangulo(10, 5);
echo "El Area es: " . $miRectangulo->calcularArea();
?>