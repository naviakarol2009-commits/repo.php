<?php
$cadena = "Rosa*Juan*Pedro*Jose";

// Separamos por el asterisco
$arreglo = explode("*", $cadena);

echo "<h3>Arreglo resultante:</h3>";
print_r($arreglo);

// Recorrido opcional
echo "<ul>";
foreach ($arreglo as $nombre) {
    echo "<li>$nombre</li>";
}
echo "</ul>";
?>