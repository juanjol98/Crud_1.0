<?php
include("conexion.php");
$con=conectar();


$dni=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['num_tel'];
$correo=$_POST['Correo'];
$contraseña=$_POST['contraseña'];
$pass_fuerte= password_hash($contraseña,PASSWORD_DEFAULT);

$sql="INSERT INTO usuarios VALUES('$dni','$nombres','$apellidos', '$telefono', '$correo', '$pass_fuerte')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios.php");
    
}else {
}
?>