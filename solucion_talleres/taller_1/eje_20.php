<?php
// Vector de nombres
$nombres = ["Ana", "Juan", "Pedro", "Maria", "Esteban", "Luis", "Jose", "Alejandro"];

// Nombre a buscar (podría venir de un formulario con $_POST)
$nombre_buscar = "Pedro";

// in_array() devuelve true si el valor existe en el arreglo
if (in_array($nombre_buscar, $nombres)) {
    echo "El nombre '" . $nombre_buscar . "' SÍ existe en el vector.";
} else {
    echo "El nombre '" . $nombre_buscar . "' NO existe en el vector.";
}
?>