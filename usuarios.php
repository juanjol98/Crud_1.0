<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="crudstilos.css">
        
    </head>
    <body>
            <div class="contenedorP">
                    <div class="contenedor1"> 
                        <div class="contenedor2">
                            
                                <form action="insertar.php" method="POST" class="formulario">       
                                    <h3>Ingrese un usuario</h3>
                                    <input type="text" class="campoDatos" name="cedula" placeholder="cedula" required maxlength="11">
                                    <input type="text" class="campoDatos" name="nombres" placeholder="Nombres" required>
                                    <input type="text" class="campoDatos" name="apellidos" placeholder="Apellidos" required>
                                    <input type="text" class="campoDatos" name="num_tel" placeholder="Telefono" required>
                                    <input type="email" class="campoDatos" name="Correo" placeholder="correo electronico" required>
                                    <input type="password" class="campoDatos" name="contraseña" placeholder="Contraseña" required>
                                    
                                    <input type="submit" class="boton-enviar">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <?php
                                $buscar=$_POST['buscar'];                           
                            ?>
                            <form action="" method="post" class="busqueda">
                                <input type="text" name="buscar" id="buscar" value="<?php echo $buscar ?>">
                                <input type="submit" value="buscar" id="boton">                                
                            </form>
                            <table class="table">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Cédula</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Teléfono</th>
                                        <th>correo electrónico</th>
                                        <th>contraseña</th>
                                    </tr>
                                </thead>
                                <?php
                                    $sql="SELECT cedula, nombres, apellidos, num_tel, Correo, contraseña FROM usuarios where cedula like '$buscar' '%' or nombres like '$buscar' '%' or apellidos like '$buscar' '%' or num_tel like '$buscar' '%' or Correo like '$buscar' '%' order by cedula desc";
                                    $query=mysqli_query($con,$sql);
                                ?>    
                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>                                          
                                                <th><?php  echo $row['cedula']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['num_tel']?></th>
                                                <th><?php  echo $row['Correo']?></th>
                                                <th><?php  echo $row['contraseña']?></th>

                                                <th><a href="actualizar.php?id=<?php echo $row['cedula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cedula'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>