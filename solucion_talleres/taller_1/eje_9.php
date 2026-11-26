<?php
$frase = "El formulario de inscripción podrá imprimirse descargándose de la página institucional del SENA.";

// mb_strlen cuenta caracteres reales (UTF-8), strlen cuenta bytes
echo "Cantidad de caracteres (mb_strlen): " . mb_strlen($frase, "UTF-8") . "<br>";
echo "Cantidad de bytes (strlen): " . strlen($frase) . "<br>";
?>