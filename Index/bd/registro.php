<?php

$Id_Usuario = $_POST["Id_Usuario"];
$Contraseña = $_POST["Contraseña"];
session_start();
$_SESSION['Id_Usuario']=$Id_Usuario;

include('db.php');

$consulta="SELECT * FROM  usuarios WHERE Id_Usuario = '$Id_Usuario' AND Contraseña = '$Contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
      header("location:home.html");
}else{
      ?>
      <?php
      include("index.html");
      ?>
      <h1>Hay un error en la autentificación</h1>
      <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);