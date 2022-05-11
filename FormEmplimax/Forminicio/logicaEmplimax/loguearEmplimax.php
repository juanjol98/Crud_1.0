<?php
    require 'conexionEmplimax.php';
    session_start();
    $usuario = $_POST['numero_id'];
    $contraseña = $_POST['contraseña'];
    
    $q = "SELECT COUNT(*) as contar from datos_de_usuarios where numero_id = '$usuario' and contraseña = '$contraseña'";
    
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
    
        $_SESSION['numero_id'] = $usuario;
        header("location: ../perfil.php");
    
    }else{
        echo "DATOS INCORRECTOS";
    }
?>