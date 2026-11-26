<?php
class Empleado {
    private $nombre;
    private $sueldo;
    private $email;
    private $fecha_nacimiento;
    private $peso;
    private $altura;

    // Método inicializar: recibe todos los atributos
    public function inicializar($nombre, $sueldo, $email, $fecha_nacimiento, $peso, $altura) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
        $this->email = $email;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Método privado: recibe sueldo y devuelve TRUE/FALSE
    private function debePagarImpuestos($sueldo) {
        return $sueldo > 2000000;
    }

    // Imprime nombre y mensaje de impuestos (llama al método privado)
    public function imprimir() {
        echo "Nombre: " . $this->nombre . "<br>";
        if ($this->debePagarImpuestos($this->sueldo)) {
            echo "Debe pagar impuestos.<br>";
        } else {
            echo "No debe pagar impuestos.<br>";
        }
    }

    // Calcula edad y muestra si puede votar
    public function calcularEdad() {
        $nacimiento = new DateTime($this->fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($nacimiento)->y;

        echo "Edad: " . $edad . " años.<br>";
        if ($edad >= 18) {
            echo "Puede votar.<br>";
        } else {
            echo "No puede votar.<br>";
        }
    }
}
?>