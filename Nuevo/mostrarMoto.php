<?php
require_once "moto.php";
$motos = moto::mostrarMoto();
?>
<html>
<head>
    <title>Lista de Motos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>
<body> 
    <table id="myTable" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Año</th>
                <th>cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($motos as $moto): ?>
                <tr>
                    <td><?php echo $moto['placa']; ?></td>
                    <td><?php echo $moto['marca']; ?></td>
                    <td><?php echo $moto['año']; ?></td>
                    <td><?php echo $moto['id_mecanico']; ?></td>
                    <td><?php echo $moto['id_cliente']; ?></td>
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
