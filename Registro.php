 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <?php include "header.php" ?>

 <?php
// Iniciar sesión
session_start();

// Verificar si existe la sesión
if (!isset($_SESSION['usermane'])) {
    // Redirigir al usuario al índice si no está autenticado
    header("Location: ./index.php");
    exit();
}

// Obtener el valor de la sesión
$no_cuenta = $_SESSION['usermane'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <header>
        <h3>¿ALGUIEN NUEVO? ¡REGISTRALO!</h3>
    </header>
    
    <div>
        <form action="./logica/enviarRegistro.php" method="post">
            <hr>
            <div>
                <label for="nombre_usuario">Ingresa nombre usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>

                <label for="carrera">Carrera:</label>
                <input type="text" id="carrera" name="carrera" required maxlength="100" placeholder="Ingresa tu carrera">
                <br><br>

                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>

                <label for="no_cuenta">Número de cuenta:</label>
                <input type="text" id="no_cuenta" name="no_cuenta" required maxlength="7" placeholder="Ingresa el numero de cuenta">
                <br><br>

                <label for="direccion">Dirección particular:</label>
                <input type="text" id="direccion" name="direccion" required maxlength="100" placeholder="Ingresa tu dirección particular">
                <br><br>

                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" required maxlength="8" placeholder="Ingresa tu teléfono">
                <br><br>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required minlength="3" maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
            <button type="submit" name="submit">Crear Registro</button>
        </form>
    </div>
</body>
</html>

<!-- <a href='./Registro.php'>Nuevo registro</a> -->

<hr>
<h3><a href='./Principal.php'> REGRESAR A REGISTROS</a></h3>

<?php include "footer.php" ?>