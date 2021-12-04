



<?php 

include("connect.php");



if(isset($_GET)){


    echo var_dump($_GET["id"]);

    $id = $_GET["id"];

    $query = "DELETE FROM `usuarios` WHERE `ID`=$id";

    $data = mysqli_query($conn, $query);

    if(!$data){
        echo "Error al eliminar el usuario";
    }

    echo var_dump($data);

}



header("location:index.php");





?>