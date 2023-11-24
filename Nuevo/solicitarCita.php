<?php
    require_once("cliente.php");
    require_once("mecanico.php");
    require_once("moto.php");
    $clientes = cliente::mostrar();
    $mecanicos = mecanico::mostrarMeca();
    $motos = moto::mostrarMoto();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Solicitar Cita</title>
</head>
<body>

    <h1>Solicitar Cita</h1>

    <form action="guardarCita.php" method="POST">
        

        <label for="fecha">Fecha de la cita:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="hora">Hora de la cita:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        </select>
            <h1 class="h3 mb-4 text-gray-800">Mecanico</h1>
            <select class="form-select form-select mb-3" name="id_mecanico">
            <option selected>Seleccione</option>
                <?php
                foreach ($mecanicos as $mecanico) {
                    echo "<option value='" . $mecanico['id_mecanico'] . "'>" . $mecanico['nombre'] . "</option>";
                }
                ?>
        </select>

        </select>
            <h1 class="h3 mb-4 text-gray-800">Cliente</h1>
            <select class="form-select form-select mb-3" name="id_cliente">
            <option selected>Seleccione</option>
                <?php
                foreach ($clientes as $cliente) {
                    echo "<option value='" . $cliente['id_cliente'] . "'>" . $cliente['nombre'] . "'>" . $cliente['apellido'] . "</option>";
                }
                ?>
         </select>

         </select>
            <h1 class="h3 mb-4 text-gray-800">Moto</h1>
            <select class="form-select form-select mb-3" name="id_moto">
            <option selected>Seleccione</option>
                <?php
                foreach ($motos as $moto) {
                    echo "<option value='" . $moto['id_moto'] . "'>" . $moto['marca'] . "'>" . $cliente['placa'] . "</option>";
                }
                ?>
         </select>

        <input type="submit" value="Solicitar Cita">
    </form>

</body>
</html>

