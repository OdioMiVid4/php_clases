<?php
class CuentaBancaria
{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($monto)
    {
        if ($monto > 0) {
            $this->saldo -= $monto;
            echo "Deposito de S/ $monto realizado . <br> ";
        } else {
            echo "Monto invalido para deposito . <br>";
        }
    }

    public function retirar($monto)
    {
        if ($monto > 0 && $monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Retiro de S/ $monto realizado . <br>";
        } else {
            echo "Fondoa insuficientes";
        }
    }
}

?>