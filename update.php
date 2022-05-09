<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['cedula'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE datos SET  cedula='$dni',nombres='$nombres',apellidos='$apellidos' WHERE cod_estudiante='$cod_estudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>