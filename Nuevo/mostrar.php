<?php
require_once "cliente.php";
$clientes = cliente::mostrar();
?>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
</head>
<body> 
    <table id="myTable" class="table table-striped table-bordered" style="width:90%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente['nombre']; ?></td>
                    <td><?php echo $cliente['apellido']; ?></td>
                    <td><?php echo $cliente['celular']; ?></td>
                    <td><?php echo $cliente['email']; ?></td>
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

</html>
