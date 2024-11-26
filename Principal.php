 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <?php include "header.php" ?>


 
<?php
session_start();
$no_cuenta= $_SESSION['usermane'];





if(!isset($no_cuenta)){

        header("location: ./index.php");
}else{
    
    echo "<h1> ¡BIENVENIDO!  </h1> ";
    echo "<h3> TU NUMERO DE CUENTA ES  $no_cuenta </h3>";
   
    

    // se usa el requiere para si psi se necesita el archivo conexion
require "./logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

//genear el query
$consulta_sql="SELECT * FROM alumno";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='3' >
    <tr>
        <th>Usuario</th>
        <th>Carrera</th>
        <th>No Cuenta Institucional</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>
        <th>Contraseña</th>
        <th>Fecha de Registro</th>
        <th>Permisos</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre_usuario'] ."</td>";
     echo"<td>". $row['carrera'] ."</td>";
     echo"<td>". $row['no_cuenta'] ."</td>";
     echo"<td>". $row['direccion'] ."</td>";
     echo"<td>". $row['telefono'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo"<td>". $row['fecha_registro'] ."</td>";
     echo"<td>". $row['permisos'] ."</td>";
     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    
    echo " <h1 style='color:red' >Sin Ningun registro</h1>";
 } 
  echo "
    <a href='EliminarUsuario.php'>ELIMINAR USUARIO</a>
    <br>
    <a href='Registro.php'> CREAR NUEVO REGISTRO</a><br>";
   // echo "<a href='logica/salir.php'> SALIR</a>";
    
}
?>

<?php include "footer.php" ?>