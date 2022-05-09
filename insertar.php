<?php
include("conexion.php");
$con=conectar();


$dni=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['num_tel'];
$correo=$_POST['Correo'];
$contraseña=$_POST['contraseña'];


$sql="INSERT INTO usuarios VALUES('$dni','$nombres','$apellidos', '$telefono', '$correo', '$contraseña')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>