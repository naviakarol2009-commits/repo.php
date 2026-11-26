<?php
require_once 'Cuenta.class.php';

$cuenta = new Cuenta(
    $_POST['numero_cuenta'],
    $_POST['nombre_titular'],
    $_POST['saldo'],
    $_POST['tipo_cuenta']
);

$monto = $_POST['monto'];
$operacion = $_POST['operacion'];

echo "<h2>Resultado de la operación</h2>";

switch ($operacion) {
    case 'ingresar':
        $cuenta->ingresar($monto);
        break;
    case 'retirar':
        $cuenta->retirar($monto);
        break;
    case 'pagar':
        $cuenta->pagarFactura($monto);
        break;
    case 'transferir':
        $destino = new Cuenta(
            $_POST['numero_cuenta_destino'],
            $_POST['nombre_titular_destino'],
            $_POST['saldo_destino'],
            $_POST['tipo_cuenta_destino']
        );
        $cuenta->transferir($monto, $destino);
        break;
    default:
        echo "Operación no válida.<br>";
}

echo "<br><a href='index.php'>Volver</a>";
?>