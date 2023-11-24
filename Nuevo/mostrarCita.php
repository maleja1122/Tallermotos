<?php
require_once ("cita.php");
require_once("cliente.php");
require_once("mecanico.php");
require_once("moto.php");

$cita = cita::mostrarCita();
?>
<html>
<head>
    <title>Lista de citas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>
<body> 
    <table id="myTable" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
                <th>Hora/th>
                <th>Fecha</th>
                <th>mecanico</th>
                <th>Cliente</th>
                <th>Moto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cita as $cita): ?>
                <tr>
                    <td><?php echo $cita['hora']; ?></td>
                    <td><?php echo $cita['fecha']; ?></td>
                    <td><?php echo $cita['id_cliente']; ?></td>
                    <td><?php echo $cita['id_mecanico']; ?></td>
                    <td><?php echo $cita['moto']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>
</html>

