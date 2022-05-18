<?php

$Id_Usuario = $_POST["Id_Usuario"];
$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Contraseña = $_POST["Contraseña"];

include('db.php');

$sql = "INSERT INTO usuarios (Id_Usuario, Nombre, Apellido, Contraseña) VALUES ('$Id_Usuario','$Nombre','$Apellido','$Contraseña')";
if (mysqli_query($conexion, $sql)) {
      echo '<p>Usuario registrado. Click <a href="http://localhost:8080/EPM/Inicio.html">aquí</a> para iniciar sesion </p>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conexion);