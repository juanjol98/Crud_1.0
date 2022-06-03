<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Views/Css/NavBar.css" />
    <link rel="stylesheet" href="../Views/Css/Login.css">
    <link rel="stylesheet" href="../Views/Css/Footer.css" />
    <script
      src="https://kit.fontawesome.com/10e19edffc.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
<header class="header">
      <nav class="nav">
        <img class="logo" src="../Views/image/Logo.png" />
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="./Inicio.html" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="./Servicios.html"  class="nav-menu-link nav-link">Servicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="./Oficinas.html" class="nav-menu-link nav-link">Oficinas</a>
          </li>
          <li class="nav-menu-item">
            <a href="Cartelera.html" class="nav-menu-link nav-link">Carteleras</a>
          </li>
        </ul>
      </nav>
    </header>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Ingresar</h2>

  <form action="../Controller/UsuarioController.php" method="POST" class="login-container">
      <input type="hidden" name="action" value="login">
    <p><input type="text" name="usuario" placeholder="Usuario"></p>
    <p><input type="password" name="contrasena" placeholder="Password"></p>
    <p><input type="submit" value="Log in"></p>
  </form>
</div>
<footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure>
            <a href="#">
              <img src="../Views/image/LogoOscuro.png" alt="Logo Emplimax" />
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
</body>
</html>
<?php
?>

