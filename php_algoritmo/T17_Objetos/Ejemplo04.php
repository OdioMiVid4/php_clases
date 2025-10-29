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
            $this->saldo += $monto;
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
            echo "Fondos insuficientes o monto invalido. <br>";
        }
    }
    public function mostrarSaldo(){
        echo "Saldo actual de {$this->titular} S/ $this->saldo<br>";
    }
}

//Crear objeto Cuenta
$cuenta = new CuentaBancaria("Carlos", "1000");

//Operaciones
$cuenta->mostrarSaldo();
$cuenta->depositar(500);
$cuenta->retirar(300);
$cuenta->retirar(1500); //Error esperado
$cuenta->mostrarSaldo();

?>