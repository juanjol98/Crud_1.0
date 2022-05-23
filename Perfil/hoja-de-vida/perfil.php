<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    
    <title>Mi perfil</title>
</head>
<body>
    <nav>
        <h1>Nombre de usuario</h1>
        <div class="foto">
            <img src="../imagenes/Perfil.png" alt="Foto_De_Perfil">
        </div>
    </nav>

    <main>
        <div class="cont-p">
            <div class="cont-cont">
                <div class="cont-info-p">
                    <div class="cont-info-p2">
                        <div class="cont-info-p3">
                            <h2>Nombre del usuario</h2>
                            <h2>Teléfono:</h2>
                            <p>numero</p>
                            </div>
                            <div class="foto1">
                                    <img src="../imagenes/Perfil.png" alt="" class="FotoP">
                            </div>
                        </div>
                        <div class="icon">
                            <a href="#miModal" class="a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                            <div id="miModal" class="modal">
                                <div class="modal-contenido">
                                    <a href="#" class="a1">X</a>
                                    <h1>Mi información personal</h1>
                                    <p>Aqui podrá modificar información personal.</p>
                                    <hr class="hr1">
                                    <form action="#" class="form1">
                                        <div class="inputs">
                                            <label for="">Nombre:</label>
                                            <input type="text">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Apellidos:</label>
                                            <input type="text">                                            
                                        </div>
                                        <div class="inputs">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" disabled>
                                        </div>
                                        <div class="inputs" id="fecha">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Estado civil</label>
                                            <select name="" id="estado-civil">
                                                <option value="" >Soltero(a)</option>
                                                <option value="" >Casado(a)</option>
                                                <option value="" >Union libre</option>
                                                <option value="" >Divorciado(a)</option>
                                                <option value="" >Viudo(a)</option>
                                            </select>
                                        </div>
                                        <div class="inputs"></div>

                                        <div class="inputs">
                                            <label for="">Teléfono:</label>
                                            <input type="number">                                          
                                        </div>
                                        <div class="inputs">
                                            <label for="">Correo electrónico:</label>
                                            <input type="email">
                                        </div>

                                        <div class="foto-p">
                                            <img src="../imagenes/Perfil.png" alt="Foto de perfil">
                                        </div>
                                        <div class="input-foto">
                                            <input class="input-file" id="cambiar-foto" type="file" value="Cambiar foto"> 
                                            Cambiar foto
                                        </div>

                                        <div class="button-form1">
                                            <input class="button" type="submit" value="Guardar">
                                            <input class="button" type="submit" value="Cancelar">
                                        </div>  
                                    </form>
                                </div>  
                            </div>
                        </div>                
                    </div>    
                </div>
            </div>

            <div class="cont-cont">
                <div class="cont-info-p1">
                    <div class="cont-info-p2">
                        <div class="cont-info-p4">
                            <h2>Estudios</h2>
                            <hr>
                            </div>
                        </div>
                        <div class="icon">
                            <a href="#miModal2" class="a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                            <div id="miModal2" class="modal">
                                <div class="modal-contenido2">
                                    <a href="#" class="a1">X</a>
                                    <h1>Agrega estudios</h1>
                                    <p>Aqui podrá agregar los estudios que ha realizado.</p>
                                    <hr class="hr1">
                                    <form action="#" class="form1">
                                    <div class="inputs">
                                            <label for="">Nivel de estudio</label>
                                            <select name="" id="nivel-estudio">
                                                <option value="" >Basica primaria(1°-5°)</option>
                                                <option value="" >Basica seundaria(8°-9°)</option>
                                                <option value="" >Basica primaria(10°-12°)</option>
                                                <option value="" >Técnico</option>
                                                <option value="" >Tecnológica</option>
                                                <option value="" >Universitario</option>
                                                <option value="" >Especialización</option>
                                                <option value="" >Maestría</option>
                                                <option value="" >Doctorado</option>
                                            </select>
                                        </div>
                                        <div class="inputs">
                                            <label for="">Título del estudio:</label>
                                            <input type="text">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Nombre de la institución:</label>
                                            <input type="text">                                            
                                        </div>
                                        <div class="inputs" id="fecha">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date">
                                        </div>
                                        

                                        <div class="inputs">
                                            <label for="">Teléfono:</label>
                                            <input type="number">                                          
                                        </div>
                                        <div class="inputs">
                                            <label for="">Correo electrónico:</label>
                                            <input type="email">
                                        </div>                              
                                        <div class="button-form1">
                                            <input class="button" type="submit" value="Guardar">
                                            <input class="button" type="submit" value="Cancelar">
                                        </div>  
                                    </form>
                                </div>  
                            </div>
                        </div>                
                    </div>        
                </div>
            </div>

            <div class="cont-cont">
                <div class="cont-info-p1">
                    <div class="cont-info-p2">
                        <div class="cont-info-p4">
                            <h2>Expriencia laboral</h2>  
                            <hr>  
                            </div>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                            <div id="miModal" class="modal">
                                <div class="modal-contenido">
                                    <a href="#" class="a1">X</a>
                                    <h1>Mi información personal</h1>
                                    <p>Aqui podrá modificar información personal.</p>
                                    <hr class="hr1">
                                    <form action="#" class="form1">
                                        <div class="inputs">
                                            <label for="">Nombre:</label>
                                            <input type="text">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Apellidos:</label>
                                            <input type="text">                                            
                                        </div>
                                        <div class="inputs">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" disabled>
                                        </div>
                                        <div class="inputs" id="fecha">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Estado civil</label>
                                            <select name="" id="estado-civil">
                                                <option value="" >Soltero(a)</option>
                                                <option value="" >Casado(a)</option>
                                                <option value="" >Union libre</option>
                                                <option value="" >Divorciado(a)</option>
                                                <option value="" >Viudo(a)</option>
                                            </select>
                                        </div>
                                        <div class="inputs"></div>

                                        <div class="inputs">
                                            <label for="">Teléfono:</label>
                                            <input type="number">                                          
                                        </div>
                                        <div class="inputs">
                                            <label for="">Correo electrónico:</label>
                                            <input type="email">
                                        </div>

                                        <div class="foto-p">
                                            <img src="../imagenes/Perfil.png" alt="Foto de perfil">
                                        </div>
                                        <div class="input-foto">
                                            <input class="input-file" id="cambiar-foto" type="file" value="Cambiar foto"> 
                                            Cambiar foto
                                        </div>

                                        <div class="button-form1">
                                            <input class="button" type="submit" value="Guardar">
                                            <input class="button" type="submit" value="Cancelar">
                                        </div>  
                                    </form>
                                </div>  
                            </div>
                        </div>                
                    </div>        
                </div>
            </div>

            <div class="cont-cont">
                <div class="cont-info-p1">
                    <div class="cont-info-p2">
                        <div class="cont-info-p4">
                            <h2>Idiomas</h2>
                            <hr>
                            </div>
                        </div>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                            <div id="miModal" class="modal">
                                <div class="modal-contenido">
                                    <a href="#" class="a1">X</a>
                                    <h1>Mi información personal</h1>
                                    <p>Aqui podrá modificar información personal.</p>
                                    <hr class="hr1">
                                    <form action="#" class="form1">
                                        <div class="inputs">
                                            <label for="">Nombre:</label>
                                            <input type="text">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Apellidos:</label>
                                            <input type="text">                                            
                                        </div>
                                        <div class="inputs">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" disabled>
                                        </div>
                                        <div class="inputs" id="fecha">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date">
                                        </div>
                                        <div class="inputs">
                                            <label for="">Estado civil</label>
                                            <select name="" id="estado-civil">
                                                <option value="" >Soltero(a)</option>
                                                <option value="" >Casado(a)</option>
                                                <option value="" >Union libre</option>
                                                <option value="" >Divorciado(a)</option>
                                                <option value="" >Viudo(a)</option>
                                            </select>
                                        </div>
                                        <div class="inputs"></div>

                                        <div class="inputs">
                                            <label for="">Teléfono:</label>
                                            <input type="number">                                          
                                        </div>
                                        <div class="inputs">
                                            <label for="">Correo electrónico:</label>
                                            <input type="email">
                                        </div>

                                        <div class="foto-p">
                                            <img src="../imagenes/Perfil.png" alt="Foto de perfil">
                                        </div>
                                        <div class="input-foto">
                                            <input class="input-file" id="cambiar-foto" type="file" value="Cambiar foto"> 
                                            Cambiar foto
                                        </div>

                                        <div class="button-form1">
                                            <input class="button" type="submit" value="Guardar">
                                            <input class="button" type="submit" value="Cancelar">
                                        </div>  
                                    </form>
                                </div>  
                            </div>
                        </div>                
                    </div>        
                </div>
            </div>
   
    </main>

    <footer>

    </footer>
</body>
</html>