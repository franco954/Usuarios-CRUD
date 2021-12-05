


<?php 

include("connect.php");


if(isset($_GET["id"])){

    echo var_dump($_SESSION);

    // $id = ($_GET["id"];

    // echo var_dump($id);

    // $query = "UPDATE `usuarios` SET `Nombre`='[value-2]',`Apellido`='[value-3]',`Email`='[value-4]',`Teléfono`='[value-5]',`País`='[value-6]', WHERE `ID` = $id";





};


header("location:index.php");


?>