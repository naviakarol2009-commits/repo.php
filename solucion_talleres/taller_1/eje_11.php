<?php
$frase = "PHP es un lenguaje de programación interpretado, diseñado originalmente para la creación de páginas web dinámicas.";

$vocales_min = ["a", "e", "i", "o", "u"];
$vocales_may = ["A", "E", "I", "O", "U"];

$resultado = str_replace($vocales_min, $vocales_may, $frase);

echo "Frase original:<br>" . $frase . "<br><br>";
echo "Frase modificada:<br>" . $resultado;
?>