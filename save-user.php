
<?php 

include "connect.php";




if (isset($_POST["save-user"])){


    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $telefono = $_POST["Telefono"];
    $pais = $_POST["Pais"];

    $query = "INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Email`, `Teléfono`, `País`) VALUES ('$nombre','$apellido','$email','$telefono','$pais')";
    
    $data = mysqli_query($conn, $query);
    
    if(!$data){
        echo "error al registrar usuario";
    }


}




?>