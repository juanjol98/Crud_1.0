





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="./Inisesion.css" />
    <script src="./validacionIni.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
</head>

<body>
<form action="logicaEmplimax/loguearEmplimax.php" method="post">
        <div class="form-cont">
            <div class="titulo">
                <h4>Iniciar sesión</h4>
            </div>
            <div class="cont-image">
                <img src="../imagenes/logo_formulario.png" alt="Logo" />
            </div>
            <section class="cont-init">
                <div class="campos">
                    <div class="camp">
                        <label for="User"> Documento </label>
                        <input type="number" name="numero_id" id="Documento" required />
                    </div>
                    <div class="camp-2">
                        <label for="pass"> Contraseña </label>
                        <input type="password" name="contraseña" id="contraseña" required />
                    </div>
                </div>
            </section>
            <div class="cont-button">
                <button type="submit" id="validar">Ingresar</button>
            </div>
            <div class="cont-btn-botton">
                <div class="btn-register">
                    <a href="/Formulario-Usuario/FormUsuario.html">Registrarse</a>
                </div>
                <div class="btn-pass">
                    <a href="../Olvido_contraseña/OlvidoSuContraseña.php">¿Olvido su contraseña?</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>