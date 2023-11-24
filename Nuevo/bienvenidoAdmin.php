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
    <form action="mostrarCita.php" method="POST">
        <button type="submit" name="logout">Ver citas</button>
       
    </form>

    <form action="mostrarAdmin.php" method="POST">
        <button type="submit" name="logout">Mostrar Administradores</button>
       
    </form>

    <form action="mostrar.php" method="POST">
        <button type="submit" name="logout">Lista de Clientes Registrados</button>
       
    </form>

    <form action="agregarMeca.php" method="POST">
        <button type="submit" name="logout">Agregar Mecanicos</button>
       
    </form>

    <form action="mostrarMeca.php" method="POST">
        <button type="submit" name="logout">Lista de Mecanicos</button>
       
    </form>
</body>
</html>