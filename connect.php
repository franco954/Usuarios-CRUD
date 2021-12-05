


<?php

session_start();

$_SESSION['modo'] = 0;

$user = "root";
$pass = "";
$server = "localhost";
$database = "registrousuarios";


mysqli_query(mysqli_connect($server, $user, $pass), "CREATE DATABASE IF NOT EXISTS $database");

$conn = mysqli_connect($server, $user, $pass, $database);




?>