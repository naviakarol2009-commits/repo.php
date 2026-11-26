<?php
class Cuenta {
    private $numero_cuenta;
    private $nombre_titular;
    private $saldo;
    private $tipo_cuenta;

    public function __construct($numero_cuenta, $nombre_titular, $saldo, $tipo_cuenta) {
        $this->numero_cuenta = $numero_cuenta;
        $this->nombre_titular = $nombre_titular;
        $this->saldo = $saldo;
        $this->tipo_cuenta = $tipo_cuenta;
    }

    public function ingresar($monto) {
        $this->saldo += $monto;
        echo "Se ingresaron $" . $monto . ". Saldo actual: $" . $this->saldo . "<br>";
    }

    public function retirar($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Se retiraron $" . $monto . ". Saldo actual: $" . $this->saldo . "<br>";
        } else {
            echo "Saldo insuficiente. Saldo actual: $" . $this->saldo . "<br>";
        }
    }

    public function pagarFactura($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            echo "Factura pagada por $" . $monto . ". Saldo actual: $" . $this->saldo . "<br>";
        } else {
            echo "Saldo insuficiente para pagar la factura. Saldo actual: $" . $this->saldo . "<br>";
        }
    }

    public function transferir($monto, $cuenta_destino) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
            $cuenta_destino->saldo += $monto; // se accede porque estamos dentro de la misma clase
            echo "Se transfirieron $" . $monto . " a la cuenta " . $cuenta_destino->numero_cuenta . ".<br>";
            echo "Saldo actual: $" . $this->saldo . "<br>";
        } else {
            echo "Saldo insuficiente para transferir. Saldo actual: $" . $this->saldo . "<br>";
        }
    }

    // Getters
    public function getNumeroCuenta() { return $this->numero_cuenta; }
    public function getNombreTitular() { return $this->nombre_titular; }
    public function getSaldo() { return $this->saldo; }
    public function getTipoCuenta() { return $this->tipo_cuenta; }
}
?>