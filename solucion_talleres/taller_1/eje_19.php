<?php
$nombre = "alejandro";

// substr con índice negativo → cuenta desde el final
$ultimos4 = substr($nombre, -4);

echo "Nombre: " . $nombre . "<br>";
echo "Últimos 4 caracteres: " . $ultimos4;
?>