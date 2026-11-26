<?php
// Arreglo asociativo: código => prenda
$prendas = [
    48 => "Camisa",
    75 => "Pantalon",
    26 => "Chaqueta",
    35 => "Gorra",
    45 => "Camiseta",
    22 => "Medias",
    17 => "Correa",
    15 => "Zapatos"
];

echo "<h3>Arreglo original:</h3>";
print_r($prendas);

// ksort() → ordena por clave ascendente
ksort($prendas);
echo "<h3>Después de ksort() (clave ascendente):</h3>";
print_r($prendas);

// krsort() → ordena por clave descendente
krsort($prendas);
echo "<h3>Después de krsort() (clave descendente):</h3>";
print_r($prendas);
?>