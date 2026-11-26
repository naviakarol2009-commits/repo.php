<?php
$nombre = $_POST["txtNombre"] ?? "";
$tipoEstudio = $_POST["txtTipoEstudio"] ?? "";

$deportes = [];
if (isset($_POST["txtBaloncesto"]))
    $deportes[] = "Baloncesto"; //AGREGAR ELEMENTO AL FINAL DEL ARRAY
if (isset($_POST["txtFutbol"]))
    $deportes[] = "Futbol";
if (isset ($_POST["txtTenis"]))
    $deportes[] = "Tenis";
if (isset($_POST["txtVoleibol"]))
    $deportes[] = "Voleibol";

$msgDeportes = implode(" , ",$deportes) 

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
        <div class="campo2">
            <label>Nombre: <?php echo $nombre ?></label>
        </div>
        <div class="campo2">
            <label>Tipo de Estudio: <?php echo $tipoEstudio  ?></label>
        </div>
        <div class="campo2">
            <label>Deportes Practicados: <?php echo $msgDeportes ?></label>
        </div>
        <div class="campo2">
            <label>Observaciones: <?php echo $msgDeportes ?></label>
        </div>
    </main>

</body>

</html>