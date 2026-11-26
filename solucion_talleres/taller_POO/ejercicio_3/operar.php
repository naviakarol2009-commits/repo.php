<?php
session_start();
require_once 'Cuenta.class.php';

if (!isset($_SESSION['cuentas'][$_GET['indice']])) {
    die("Cuenta no encontrada.");
}

$indice = $_GET['indice'];
$cuenta = $_SESSION['cuentas'][$indice];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Operar cuenta</title>
</head>
<body>
    <h1>Cuenta: <?php echo $cuenta->getNumeroCuenta(); ?></h1>
    <p>Titular: <?php echo $cuenta->getNombreTitular(); ?></p>
    <p>Saldo actual: $<?php echo $cuenta->getSaldo(); ?></p>

    <form action="procesar.php" method="post">
        <input type="hidden" name="accion" value="operar">
        <input type="hidden" name="indice" value="<?php echo $indice; ?>">

        Operación:
        <select name="operacion">
            <option value="ingresar">Ingresar dinero</option>
            <option value="retirar">Retirar dinero</option>
            <option value="pagar">Pagar factura</option>
            <option value="transferir">Transferir saldo</option>
        </select><br><br>

        Monto: <input type="number" step="0.01" name="monto" required><br><br>

        Cuenta destino (solo transferir):
        <select name="indice_destino">
            <option value="">-- Seleccione --</option>
            <?php foreach ($_SESSION['cuentas'] as $i => $c): ?>
                <?php if ($i != $indice): ?>
                    <option value="<?php echo $i; ?>">
                        <?php echo $c->getNumeroCuenta(); ?> (<?php echo $c->getNombreTitular(); ?>)
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Realizar operación">
    </form>

    <br><a href="index.php">Volver al inicio</a>
</body>
</html>