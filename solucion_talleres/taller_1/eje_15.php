<?php
$email = "alejandro@gmail.com";

// strstr con tercer parámetro true → devuelve lo que está ANTES del carácter
$usuario = strstr($email, "@", true);

echo "Email: " . $email . "<br>";
echo "Nombre del correo: " . $usuario;
?>