<?php
//$_POST[]es un array asociativo que trae los datos enviados por POSTT del formulario
$nombre = isset($_POST["txtNombre"]) ? $_POST["txtNombre"]: "";
$email = isset($_POST["txtEmail"]) ? $_POST["txtEmail"]: "";
$telefono = $_POST["txtTelefono"] ?? 0;
$ciudad = $_POST["txtCiudad"] ?? "";
$edad = $_POST["txtEdad"] ?? -1;
if($edad >= 18){
    $msg = "usted es mayor de edad";
}elseif ($edad >= 0){
    $msg = "usted es menor de edad";
    }else{
        $msg = "edad incorrecta";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="container">
        <div class="campo">
            <label>Nombre: <?php echo $nombre ?></label>
        </div>
        <div class="campo">
            <label>Email: <?php echo $email ?></label>
        </div>
        <div class="campo">
            <label>Telefono: <?php echo $telefono ?></label>
        </div>
        <div class="campo">
            <label>Ciudad: <?php echo $ciudad; ?></label>
        </div>
        <div class="campo">
            <label>Edad: <?php echo $edad; ?></label>
        </div>
        <div class="campo">
            <label>Mayoria edad: <?php echo $msg ?></label>
        </div>
        
    </main>

</body>

</html>