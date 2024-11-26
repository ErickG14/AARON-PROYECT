<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php include "header.php" ?>
 

<?php
// Iniciar sesión
session_start();

// Verificar si la sesión del usuario está activa
if (!isset($_SESSION['usermane'])) {
    // Redirigir al inicio de sesión si no hay sesión activa
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>

<body>
    <h1 style="text-align: center;">Elimina Usuario</h1>
    <form style="text-align: center;" method="POST" action="./logica/deleteUsuario.php">
        <input type="text" name="no_cuenta" placeholder="Número de Cuenta" required />
        <br />
        <button type="submit">Eliminar usuario</button>
    </form>
    
    <h3><a href="Principal.php">REGRESAR A REGISTROS</a></h3>
</body>

</html>


<?php include "footer.php" ?>