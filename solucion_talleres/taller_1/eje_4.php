<?php
$b = "Hola mundo";

// Destruimos la variable
unset($b);

// Mostramos el resultado de isset($b)
var_dump(isset($b)); // bool(false)
echo "<br>";

if (isset($b)) {
    echo "La variable \$b ESTÁ definida.";
} else {
    echo "La variable \$b NO está definida (fue destruida con unset).";
}
?>