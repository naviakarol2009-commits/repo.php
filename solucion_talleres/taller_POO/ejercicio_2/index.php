<!DOCTYPE html>
<html>
<head>
    <title>Operaciones de Cuenta</title>
</head>
<body>
    <h1>Datos de la cuenta</h1>
    <form action="procesar.php" method="post">
        Número de cuenta: <input type="text" name="numero_cuenta" required><br><br>
        Nombre del titular: <input type="text" name="nombre_titular" required><br><br>
        Saldo inicial: <input type="number" step="0.01" name="saldo" required><br><br>
        Tipo de cuenta:
        <select name="tipo_cuenta">
            <option value="Ahorro">Ahorro</option>
            <option value="Corriente">Corriente</option>
        </select><br><br>

        <h2>Operación a realizar</h2>
        <select name="operacion">
            <option value="ingresar">Ingresar dinero</option>
            <option value="retirar">Retirar dinero</option>
            <option value="pagar">Pagar factura</option>
            <option value="transferir">Transferir saldo</option>
        </select><br><br>
        Monto: <input type="number" step="0.01" name="monto" required><br><br>

        <h2>Cuenta destino (solo para transferir)</h2>
        Número de cuenta destino: <input type="text" name="numero_cuenta_destino"><br><br>
        Nombre del titular destino: <input type="text" name="nombre_titular_destino"><br><br>
        Saldo destino: <input type="number" step="0.01" name="saldo_destino" value="0"><br><br>
        Tipo de cuenta destino:
        <select name="tipo_cuenta_destino">
            <option value="Ahorro">Ahorro</option>
            <option value="Corriente">Corriente</option>
        </select><br><br>

        <input type="submit" value="Realizar operación">
    </form>
</body>
</html>