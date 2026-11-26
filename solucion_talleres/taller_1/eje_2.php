<?php
// Inicializamos variables de distintos tipos
$a = 10;                 // entero
$b = "Hola mundo";       // string
$c = 0;                  // entero (lo usaremos en el ejercicio 5)
$d = 3.1416;             // float
$e = true;               // boolean
$f = array(1, 2, 3);     // array
$g = null;               // NULL

echo "Valor: $a → Tipo: " . gettype($a) . "<br>";
echo "Valor: $b → Tipo: " . gettype($b) . "<br>";
echo "Valor: $c → Tipo: " . gettype($c) . "<br>";
echo "Valor: $d → Tipo: " . gettype($d) . "<br>";
echo "Valor: $e → Tipo: " . gettype($e) . "<br>";
echo "Valor: (array) → Tipo: " . gettype($f) . "<br>";
echo "Valor: (null) → Tipo: " . gettype($g) . "<br>";
?>