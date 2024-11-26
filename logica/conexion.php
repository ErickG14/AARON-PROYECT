<?php

//$host_db = "localhost:3306";
//$user_db = "root";
//$pass_db = "YAZMIN1980";
//$db_name = "fes_aragon";


//$host_db = "sql311.infinityfree.com";
//$user_db = "if0_37338714";
//$pass_db = "Pdh8f0yPBOU3";
//$db_name = "if0_37338714_fes_aragon";


$host_db = "localhost:3306";
$user_db = "huronmarron";
$pass_db = "123456789";
$db_name = "prueba_bd";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){
    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}

?>