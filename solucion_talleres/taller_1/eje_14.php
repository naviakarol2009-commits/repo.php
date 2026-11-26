<?php
$nombre = "alejandro";

// Contando todos los caracteres (incluye espacios si los hay)
echo "Total de caracteres: " . strlen($nombre) . "<br>";

// Solo letras (sin espacios)
$solo_letras = str_replace(" ", "", $nombre);
echo "Solo letras (sin espacios): " . strlen($solo_letras);
?>