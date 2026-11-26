<?php
session_start();
require_once 'Cuenta.class.php';

if (!isset($_SESSION['cuentas'])) {
    $_SESSION['cuentas'] = [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cuentas</title>
</head>
<body>
    <h1>Crear cuenta</h1>
    <form action="procesar.php" method="post">
        <input type="hidden" name="accion" value="crear">
        Número de cuenta: <input type="text" name="numero_cuenta" required><br><br>
        Nombre del titular: <input type="text" name="nombre_titular" required><br><br>
        Saldo inicial: <input type="number" step="0.01" name="saldo" required><br><br>
        Tipo de cuenta:
        <select name="tipo_cuenta">
            <option value="Ahorro">Ahorro</option>
            <option value="Corriente">Corriente</option>
        </select><br><br>
        <input type="submit" value="Crear cuenta">
    </form>

    <h2>Cuentas registradas</h2>
    <?php if (empty($_SESSION['cuentas'])): ?>
        <p>No hay cuentas registradas.</p>
    <?php else: ?>
        <table border="1" cellpadding="5">
            <tr>
                <th>Número</th>
                <th>Titular</th>
                <th>Saldo</th>
                <th>Tipo</th>
                <th>Operar</th>
            </tr>
            <?php foreach ($_SESSION['cuentas'] as $i => $cuenta): ?>
                <tr>
                    <td><?php echo $cuenta->getNumeroCuenta(); ?></td>
                    <td><?php echo $cuenta->getNombreTitular(); ?></td>
                    <td>$<?php echo $cuenta->getSaldo(); ?></td>
                    <td><?php echo $cuenta->getTipoCuenta(); ?></td>
                    <td><a href="operar.php?indice=<?php echo $i; ?>">Operar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>