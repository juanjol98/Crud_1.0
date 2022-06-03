<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Views/Css/Register.css">
    <script src="https://kit.fontawesome.com/10e19edffc.js" crossorigin="anonymous"></script>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

<div class="testbox">
  <h1>Registrarse</h1>

  <form action="UsuarioController.php" method="POST" enctype="multipart/form-data">
      <hr>
    <input type="hidden" name="action" value="insert">
    <label id="icon"><i class="fa-solid fa-user"></i></label>
    <input type="text" name="usuario" placeholder="Usuario" />
    <label id="icon"><i class="fa-solid fa-envelope"></i></label>
    <input type="text" name="email"  placeholder="Email"/>
    <label id="icon"><i class="fa-solid fa-address-card"></i></label>
    <input type="number" name="documento" placeholder="Documento" />
    <label id="icon"><i class="fa-solid fa-shield-halved"></i></label>
    <input type="password" name="contrasena"  placeholder="Password" />
    <div class="user-image">
        <label id="icon-image"><i class="fa-solid fa-image"></i></label>
        <input type="file" name="imagen"  accept=".jpg, .png, .gif"/>
    </div>
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <button class="button" type="submit">Registrarse</button>
  </form>
</div>
</body>
</html>