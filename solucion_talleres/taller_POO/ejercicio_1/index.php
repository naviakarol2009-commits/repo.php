<!DOCTYPE html>
<html>
<head>
    <title>Datos del Empleado</title>
</head>
<body>
    <h1>Ingrese los datos del empleado</h1>
    <form action="procesardatos.php" method="post">
        Nombre: <input type="text" name="nombre" required><br><br>
        Sueldo: <input type="number" name="sueldo" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Fecha de nacimiento: <input type="date" name="fecha_nacimiento" required><br><br>
        Peso (kg): <input type="number" step="0.01" name="peso" required><br><br>
        Altura (m): <input type="number" step="0.01" name="altura" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>