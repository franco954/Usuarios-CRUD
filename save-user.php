
<?php 

include("connect.php");







if (isset($_POST)){
    
    echo var_dump($_POST);
    
    $createTable = "CREATE TABLE usuarios (
        ID INT(6) KEY AUTO_INCREMENT,
        Nombre TEXT(50),
        Apellido TEXT(50),
        Email varchar(60),
        Teléfono varchar(12),
        País varchar(50),
        FechaCreacion timestamp
    )";
    
    mysqli_query($conn, $createTable);

    echo var_dump($createTable);

    
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $email = $_POST["Email"];
    $telefono = $_POST["Telefono"];
    $pais = $_POST["Pais"];
    
    $query = "INSERT INTO `usuarios`(Nombre, Apellido, Email, Teléfono, País) VALUES ('$nombre','$apellido','$email','$telefono','$pais')";
    
    $data = mysqli_query($conn, $query);
    
    if(!$data){
        echo "error al registrar usuario";
    }
    
    
}


header("location: index.php");





?>