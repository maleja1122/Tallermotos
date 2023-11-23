<?php
require_once("cita.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hora = $_POST['hora'] ?? '';
    $fecha = $_POST['fecha'] ?? '';
    $id_mecanico = $_POST['id_mecanico'] ?? '';
    $id_cliente = $_POST['id_cliente'] ?? '';
    $moto = $_POST['marca'] ?? ''; // Obtener el valor de 'marca' en lugar de 'moto'

    // Array con los valores permitidos para 'moto'
    $motosPermitidas = array('BMW', 'Ducati');

    // Validar que el campo 'moto' no esté vacío y que sea una opción válida
    if (!empty($moto) && in_array($moto, $motosPermitidas)) {
        $objcita = new cita($hora, $fecha, $id_mecanico, $id_cliente, $moto);
        $objcita->guardarCita();

        echo "Hora: " . $objcita->getHora() . "<br>";
        echo "Fecha: " . $objcita->getFecha() . "<br>";
        echo "ID Mecánico: " . $objcita->getId_mecanico() . "<br>";
        echo "Moto: " . $objcita->getMoto() . "<br>";
    } else {
        echo "El campo 'moto' es requerido y debe ser 'BMW' o 'Ducati'.";
    }
}
?>

