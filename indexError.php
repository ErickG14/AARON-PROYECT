<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php include "header.php" ?>

<h1>LOGIN FALLIDO! VUELVE A INTENTARLO...</h1>
<div  >
    
        <form method="POST" action="logica/loguear.php">

            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input type="text" name="clave" placeholder="Contraseña" />
            <br />

            <button type="submit">Inicar Sesion</button>

        </form>
    
</div>


<?php include "footer.php" ?>