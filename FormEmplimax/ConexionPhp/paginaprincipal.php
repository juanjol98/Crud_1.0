<?php

session_start();
$usuario = $_SESSION['usuario'];

if(!isset($usuario)){
    header("location: login.php");
}else{
    echo "<h1>Bienvenido $usuario </h1>";

    echo "<a href= 'logica/salir.php'>Salir</a>";
}


?>