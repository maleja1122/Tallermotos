<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if (isset($_POST['login'])) {
    require 'conexion.php'; // Asegúrate de tener aquí la conexión a la base de datos

    // Obtener los valores enviados por el formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contrasenia']; // Aquí se ha actualizado el nombre de la variable

    try {
        // Consulta utilizando una sentencia preparada para evitar inyección SQL
        $sql = "SELECT * FROM cliente WHERE email = :email"; // Cambia el nombre del campo según tu base de datos
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró el usuario
        if ($resultado) {
            // Verificar si la contraseña coincide
            if (password_verify($contraseña, $resultado['contrasenia'] ?? '')) {
                // Inicio de sesión exitoso
                echo "Inicio de sesión exitoso. Bienvenido, " . $email . "!";
                // Redirigir al usuario a una página de bienvenida o a la que corresponda
                header("Location: bienvenido.php");
                exit();
            } else {
                // Credenciales inválidas
                echo "Credenciales inválidas. Por favor, verifica tu correo electrónico y/o contraseña.";
            }
        } else {
            // Usuario no encontrado
            echo "Usuario no encontrado.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>




