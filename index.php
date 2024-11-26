 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <?php include "header.php" ?>
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Sistema</title>
</head>

<body>
    <h1 style="text-align: center;">Login de Sistema</h1>
    <form style="text-align: center;" method="POST" action="logica/loguear.php">
        <input type="text" name="no_cuenta" placeholder="Número de Cuenta" />
        <br />
        <input type="password" name="clave" placeholder="Contraseña" />
        <br />
        <button type="submit">ENTRAR AL SISTEMA</button>
    </form>
</body>

</html>



   <?php include "footer.php" ?>