<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Moto</title>
</head>
<body>
    <h2>Registro de Moto</h2>
    <form action="procesar_registro_moto.php" method="POST">
        <label for="marca">Marca:</label>
        <select id="marca" name="marca" required>
            <option value="Ducati">Ducati</option>
            <option value="BMW">BMW</option>
        </select><br><br>

        <label for="placa">Placa:</label>
        <input type="text" id="placa" name="placa" required><br><br>

        <label for="ano">Año:</label>
        <input type="number" id="ano" name="ano" required><br><br>

        <label for="cliente">Cliente:</label>
        <select id="id_cliente" name="cliente" required>
            <!-- Opciones del cliente, puedes obtenerlas de tu base de datos -->
            <option value="cliente1">Cliente 1</option>
            <option value="cliente2">Cliente 2</option>
            <option value="cliente3">Cliente 3</option>
            <!-- Agrega más opciones según tus clientes -->
        </select><br><br>

        <input type="submit" value="Registrar Moto">
    </form>
</body>
</html>
