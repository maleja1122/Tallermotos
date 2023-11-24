<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Bienvenido</title>
</head>
<body>
    <h1>HOLA</h1>

    <form action="cerrarSesion.php" method="POST">
        <button type="submit" name="logout">Cerrar sesión</button>
       
    </form>
    <form action="solicitarCita.php" method="POST">
        <button type="submit" name="logout">Agendar Cita</button>
       
    </form>

    <form action="registroMoto.php" method="POST">
        <button type="submit" name="logout">Registrar Tu Moto</button>
       
    </form>
</body>
</html>
