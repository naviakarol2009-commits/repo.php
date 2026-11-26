<?php
include 'Empleado.class.php';

$empleado = new Empleado();
$empleado->inicializar(
    $_POST['nombre'],
    $_POST['sueldo'],
    $_POST['email'],
    $_POST['fecha_nacimiento'],
    $_POST['peso'],
    $_POST['altura']
);

$empleado->imprimir();
$empleado->calcularEdad();
?>