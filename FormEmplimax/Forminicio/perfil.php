<?php




session_start();
$usuario = $_SESSION['numero_id'];


if(!isset($usuario)){
    header("location: perfil.php");
}else{
    echo "<h1>Bienvenido $usuario </h1>";

    echo "<a href= 'logicaEmplimax/exit.php'>Salir</a>";
}


?>