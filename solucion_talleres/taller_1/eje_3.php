<?php
// Definimos $b (viene del ejercicio 2)
$b = "Hola mundo";

// Mostramos el resultado de isset($b)
var_dump(isset($b)); // bool(true)
echo "<br>";

// También se puede mostrar de forma legible:
if (isset($b)) {
    echo "La variable \$b ESTÁ definida.";
} else {
    echo "La variable \$b NO está definida.";
}
?>