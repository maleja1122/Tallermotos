<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Agregar Mecánico</title>
</head>
<body>
    <h2>Agregar Mecánico</h2>
    <form action="guardarMecanico.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="celular">Celular:</label>
        <input type="text" id="celular" name="celular" required><br><br>

        <label for="especializacion">Especialización:</label>
        <input type="text" id="especializacion" name="especializacion" required><br><br>

        <input type="submit" value="Agregar Mecánico">
    </form>
</body>
</html>
