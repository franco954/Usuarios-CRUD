


<?php

if($_GET){
    echo var_dump($_GET);
}


$user = "root";
$pass = "";
$server = "localhost";
$database = "registrousuarios";

//CREAMOS LA CONEXIÓN CON EL SERVIDOR QUE SE ALMACENARÁ EN $conexion
$conn = mysqli_connect($server, $user, $pass, $database) or die("No se ha podido conectar con la bbdd");

?>