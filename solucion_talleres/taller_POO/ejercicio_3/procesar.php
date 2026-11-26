<?php
session_start();
require_once 'Cuenta.class.php';

if (!isset($_SESSION['cuentas'])) {
    $_SESSION['cuentas'] = [];
}

$accion = $_POST['accion'];

// ---------- Crear cuenta ----------
if ($accion === 'crear') {
    $cuenta = new Cuenta(
        $_POST['numero_cuenta'],
        $_POST['nombre_titular'],
        $_POST['saldo'],
        $_POST['tipo_cuenta']
    );
    $_SESSION['cuentas'][] = $cuenta;
    echo "Cuenta creada correctamente.<br><a href='index.php'>Volver</a>";
    exit;
}

// ---------- Operar sobre una cuenta ----------
if ($accion === 'operar') {
    $indice = $_POST['indice'];
    if (!isset($_SESSION['cuentas'][$indice])) {
        die("Cuenta no encontrada.");
    }

    $cuenta = $_SESSION['cuentas'][$indice];
    $monto = $_POST['monto'];
    $operacion = $_POST['operacion'];

    echo "<h2>Resultado</h2>";

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
            $indice_destino = $_POST['indice_destino'];
            if ($indice_destino === '' || !isset($_SESSION['cuentas'][$indice_destino])) {
                echo "Debe seleccionar una cuenta destino válida.<br>";
            } else {
                $destino = $_SESSION['cuentas'][$indice_destino];
                $cuenta->transferir($monto, $destino);
            }
            break;
        default:
            echo "Operación no válida.<br>";
    }

    echo "<br><a href='operar.php?indice=" . $indice . "'>Volver a la cuenta</a>";
    echo " | <a href='index.php'>Volver al inicio</a>";
    exit;
}

echo "Acción no válida.";
?>