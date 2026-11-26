<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="container">
        <form id="form1" action="process.php" method="post">
            <h2>Registro Usuario</h2>
            <div class="campo">
                <label for="txtnombre">Nombre</label>
                <input type="text" name="txtNombre" id="txtNombre">
            </div>
            <div class="campo">
                <label for="txtEmail">Email</label>
                <input type="text" name="txtEmail" id="txtEmail">
            </div>
            <div class="campo">
                <label for="txtTelefono">Telefono</label>
                <input type="text" name="txtTelefono" id="txtTelefono">
            </div>
            <div class="campo">
                <label for="txtCiudad">Ciudad</label>
                <select name="txtCiudad" id="txtCiudad" class="custom-select">
                    <option value="Manizales">Manizales</option>
                    <option value="Pereira">Pereira</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Cali">Cali</option>
                </select>
            </div>
            <div class="campo">
                <label for="txtEdad">Edad</label>
                <input type="number" name="txtEdad" id="txtEdad">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>

</html>