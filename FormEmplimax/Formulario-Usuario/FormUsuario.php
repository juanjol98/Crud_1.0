<?php




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="../Navbar_Footer/NavBar.css" />
<link rel="stylesheet" href="../Navbar_Footer/Footer.css" />
<script src="./validacionUser.js"></script>
<script src="https://kit.fontawesome.com/10e19edffc.js" crossorigin="anonymous"></script>
<script defer src="../Navbar_Footer/toggle.js"></script>

<header class="header">
  <nav class="nav">
    <img class="logo" src="../imagenes/Logo.png" />
    <button class="nav-toggle" aria-label="Abrir menú">
      <i class="fas fa-bars"></i>
    </button>
    <ul class="nav-menu">
      <li class="nav-menu-item">
        <a href="./Inicio.html" class="nav-menu-link nav-link">Inicio</a>
      </li>
      <li class="nav-menu-item">
        <a href="./Servicios.html" class="nav-menu-link nav-link">Servicio</a>
      </li>
      <li class="nav-menu-item">
        <a href="#" class="nav-menu-link nav-link">Oficinas</a>
      </li>
      <li class="nav-menu-item">
        <a href="Cartelera.html" class="nav-menu-link nav-link">Carteleras</a>
      </li>
    </ul>
  </nav>
</header>

<body>
  <div class="contend">
    <div class="contend-image">
      <img src="../imagenes/logo_formulario.png" alt="">
    </div>
    <form action="insertar.php"  method="post" class="form-register" id="formUser">
      <h4>Registro Usuario</h4>
      <input class="controls" type="text" name="nombres" id="nombres" title="Porfavor o" required placeholder="Ingrese su nombre" autofocus>
      <input class="controls" type="text" name="apellidos" id="apellidos" required placeholder="Ingrese su apellido">
      <input class="controls" type="number" name="numero_id" id="numero id"placeholder="Ingrese su numero de identificacion">
      <input class="controls" type="number" name="numero_tel" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="numero tel" required placeholder="Ingrese su numero de telefono">
      <input class="controls" type="email" name="correo" id="correo" required placeholder="Ingrese su correo">
      <input class="controls" type="password" name="name" id="contraseña" required placeholder="Ingrese una contraseña">
      <input class="controls" type="password" name="contraseña" id="contraseña" required placeholder="Confirme su contraseña">
      <div class="cont-checkbox">
        <input class="checkbox" type="checkbox" required>
        <h1 class="text-checkbox">Estoy de acuerdo con </h1>
        <a href="#">"Terminos y Condiciones"</a>
      </div>
      <input class="botons" type="submit" value="Registarme">
      <div class="text-ini">
        <a href="/Form inicio/">¿Ya tiene una cuenta?</a>
        <a href="#"> Volver al inicio </a></div>
    </form>
  </div>
</body>

<footer class="pie-pagina">
  <div class="grupo-1">
    <div class="box">
      <figure>
        <a href="#">
          <img src="../imagenes/LogoOscuro.png" alt="Logo Emplimax" />
        </a>
      </figure>
    </div>
    <div class="box">
      <h2>SOBRE NOSOTROS</h2>
      <p class="parrafo2">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias,
        quos?
      </p>
      <p class="parrafo2">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias,
        quos?
      </p>
    </div>
    <div class="box">
      <h2>SIGUENOS</h2>
      <div class="red-social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
    </div>
  </div>
  <div class="grupo-2">
    <small>&copy; 2022 <b>Emplimax</b> - Todos los Derechos Reservados</small>
  </div>
</footer>

</html>