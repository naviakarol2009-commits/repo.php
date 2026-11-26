<?php
$cadena = "Devuelve una parte del string definida por los parametros start y length.";

// Buscamos la posición donde inicia "definida"
$inicio = strpos($cadena, "definida");

// Extraemos 27 caracteres desde esa posición
$subcadena = substr($cadena, $inicio, 27);

echo "Subcadena obtenida: " . $subcadena;
?>