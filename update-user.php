<?php include("connect.php"); ?>


<?php include("includes/head.php") ?>


<?php

if(isset($_GET["id"])){

    $id = $_GET["id"];

    $query = "SELECT * FROM `usuarios` WHERE `ID` = $id";

    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {

        $row = mysqli_fetch_array($data);

        $nombre = $row["Nombre"];
        $apellido = $row["Apellido"];
        $email = $row["Email"];
        $telefono = $row["Teléfono"];
        $pais = $row["País"];

    }


    if(isset($_POST["update-user"])){
        
        $nombreA = $_POST["Nombre"];
        $apellidoA = $_POST["Apellido"];
        $emailA = $_POST["Email"];
        $telefonoA = $_POST["Telefono"];
        $paisA = $_POST["Pais"];
        
        $id = $_GET["id"];
            
        $query = "UPDATE usuarios SET Nombre='$nombreA', Apellido='$apellidoA', Email='$emailA', Teléfono ='$telefonoA', País ='$paisA' WHERE ID = $id";
        
        echo var_dump($query);

        $data = mysqli_query($conn, $query);

        echo var_dump($data);
        

        if($data){
            header("location: index.php");
        }
        
        
        
        
    };
}




if(isset($_POST["cancel-update"])){

    header("location:index.php");

};

?>

<div class="container fluid">

    <div class="row d-flex justify-content-center">

        <div class="col-md-5 col-10" class="text-center ">

            <div class="card card-body rounded mt-5">
                <h4 class="text-center mb-3">Actualizar usuario</h4>
                <form action="update-user.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class="form-group">
                        <label for="l-nombre">Nombre</label>
                        <input type="text" class="form-control" value=<?php echo $nombre ?> name="Nombre" id="l-nombre"
                            required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-apellido">Apellido</label>
                        <input type="text" class="form-control" value=<?php echo $apellido ?> name="Apellido"
                            id="l-apellido" required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-email">Email</label>
                        <input type="email" class="form-control" value=<?php echo $email ?> name="Email" id="l-email"
                            required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-tel">Teléfono</label>
                        <input type="tel" class="form-control" value=<?php echo $telefono ?> name="Telefono" id="l-tel"
                            required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-pais">País</label>
                        <input type="text" class="form-control" value=<?php echo $pais ?> name="Pais" id="l-pais"
                            required>
                    </div>
                    <div class="text-center d-flex flex-wrap justify-content-center">
                        <button type="submit" name="update-user" class="btn btn-primary col-md-5 col-10 mt-4">

                            Actualizar

                        </button>
                        <button type="submit" name="cancel-update" class="btn btn-danger col-md-5 col-10 mt-4">

                            Cancelar

                        </button>
                    </div>
                </form>


            </div>

        </div>


    </div>


</div>


<?php include("includes/footer.php") ?>