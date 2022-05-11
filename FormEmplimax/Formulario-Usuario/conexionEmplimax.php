<?php
function conectar(){
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "emplimax";

    $conexion = mysqli_connect($host,$usuario,$contraseña,$bd);
    mysqli_select_db($conexion,$bd);

    return $conexion;
    
}
    
?>