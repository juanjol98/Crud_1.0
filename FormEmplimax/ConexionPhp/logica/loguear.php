<?php

require 'conexion.php';
session_start();
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$q = "SELECT COUNT(*) as contar from usuarios2 where usuario = '$usuario' and contraseña = '$contraseña'";

$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){

    $_SESSION['usuario'] = $usuario;
    header("location: ../paginaprincipal.php");

}else{
    echo "DATOS INCORRECTOS";
}

?>