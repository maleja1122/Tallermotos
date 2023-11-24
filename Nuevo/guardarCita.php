<?php
require_once("cita.php");
require_once("cliente.php");
require_once("mecanico.php");
require_once("moto.php");



$objCita = new cita($_POST["fecha"], $_POST["hora"], $_POST["id_mecanico"], $_POST["id_cliente"], $_POST["moto"]);


$citaCreada = $objCita->guardarCita();


if ($citaCreada) {
    header('Location: citaCreada.php');
    exit(); 
} else {
    header('Location:  solicitarCita.php');
    exit();
}
?>