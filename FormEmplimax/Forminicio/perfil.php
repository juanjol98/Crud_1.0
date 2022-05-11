<?php

$usuario=$_POST['numero_id'];
$contraseña=$_POST['contraseña'];


session_start();
$usuario = $_SESSION['numero_id'];


if(!isset['rol']==1){ //Administrador
    header("location: perfil.php");
}else{
    

}else{
    echo "<h1>Bienvenido $usuario </h1>";

    echo "<a href= 'logicaEmplimax/exit.php'>Salir</a>";
}


?>