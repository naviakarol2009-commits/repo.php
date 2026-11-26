<?php
// Arreglo escalar
$nombres = ["Ana", "Juan", "Pedro", "Maria", "Esteban", "Luis", "Jose", "Alejandro"];

echo "<h3>Arreglo original:</h3>";
print_r($nombres);

// sort() → ordena ascendente (A-Z)
sort($nombres);
echo "<h3>Después de sort() (ascendente):</h3>";
print_r($nombres);

// rsort() → ordena descendente (Z-A)
rsort($nombres);
echo "<h3>Después de rsort() (descendente):</h3>";
print_r($nombres);
?>