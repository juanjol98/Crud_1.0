<?php
include("conexionEmplimax.php");
$conexion=conectar();


$dni=$_POST['numero_id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['numero_tel'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
//$pass_fuerte= password_hash($contraseña,PASSWORD_DEFAULT);

$sql="INSERT INTO datos_de_usuarios VALUES('$dni','$nombres','$apellidos', '$telefono', '$correo','$contraseña')";
$query= mysqli_query($conexion,$sql);

if($query){
    Header("Location: FormUsuario.php");
    
}else {
}
?>