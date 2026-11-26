<?php
// Definimos $c con un valor "vacío" (0)
$c = 0;

var_dump(empty($c)); // bool(true) porque 0 se considera vacío
echo "<br>";

if (empty($c)) {
    echo "La variable \$c está VACÍA.";
} else {
    echo "La variable \$c NO está vacía.";
}
?>