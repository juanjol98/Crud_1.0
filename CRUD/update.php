<?php

include("conexion.php");
$con=conectar();


$dni=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['num_tel'];
$correo=$_POST['Correo'];
$contraseña=$_POST['contraseña'];

$sql="UPDATE usuarios SET  cedula='$dni',nombres='$nombres',apellidos='$apellidos', num_tel='$telefono', Correo='$correo', contraseña='$contraseña' WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>