<?php
$nombre = "alejandro";

$buscar  = ["a", "e", "i"];
$reemplazar = ["@", "3", "1"];

$resultado = str_replace($buscar, $reemplazar, $nombre);

echo "Original: " . $nombre . "<br>";
echo "Modificado: " . $resultado;
?>