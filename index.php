<?php include("connect.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>


    <div class="container">

        <h1 class="text-center mt-4 mb-5">CRUD</h1>


        <div class="row">

            <div class="col-3" class="text-center">

            <div class="card card-body rounded">
                <h4 class="text-center mb-3">Crear nuevo usuario</h4>
                <form action="save-user.php" method="POST" name="save-user">
                    <div class="form-group">
                        <label for="l-nombre">Nombre</label>
                        <input type="text" class="form-control" name="Nombre" id="l-nombre" required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-apellido">Apellido</label>
                        <input type="text" class="form-control" name="Apellido" id="l-apellido"required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-email">Email</label>
                        <input type="email" class="form-control" name="Email" id="l-email"required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-tel">Teléfono</label>
                        <input type="tel" class="form-control" name="Telefono" id="l-tel"required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="l-pais">País</label>
                        <input type="text" class="form-control" name="Pais" id="l-pais"required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary col-12 mt-4">
                            
                           Guardar

                        </button>
                    </div>
                </form>


            </div>

            </div>

            <div class="col-9">


            

    

                <table class="table table-light table-hover border">
                    <thead class="border border-dark">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">País</th>
                            <th scope="col">Fecha alta</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            
                            $query = "SELECT * FROM `usuarios`";
                            
                            $data = mysqli_query($conn, $query);

                            if ($data){
                                while ($row = mysqli_fetch_array($data)){ ?>
                                <tr class="text-center">
                                    <th scope="row"><?php echo $row["ID"] ?> </th>
                                    <td class="border"  ><?php echo $row["Nombre"] ?></td>
                                    <td class="border"  > <?php echo $row["Apellido"] ?> </td>
                                    <td class="border" ><?php echo $row["Email"] ?></td>
                                    <td class="border" ><?php echo $row["Teléfono"] ?></td>
                                    <td class="border" ><?php echo $row["País"] ?></td>
                                    <td class="border"><?php echo $row["FechaCreacion"] ?></td>
                                    <td>
                                        <a href="update-user.php?id=<?php echo $row['ID'] ?>" class="btn btn-success">Actualizar</a>
                                        <a href="delete-user.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Borrar</a>
                                    </td>
                                </tr>
        
        
                                <?php  }   
                            }?>








                    </tbody>
                </table>
            

            </div>





        </div>








    </div>











    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>

</html>