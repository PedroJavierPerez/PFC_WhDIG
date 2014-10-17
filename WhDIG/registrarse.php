<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Web de eventos de ocio">
        <meta name="keywords" content="evento,ocio,bar,deporte,pub">
        <title>WhDIG</title>
        <link rel="stylesheet" type="text/css" href="css/estilos_principal.css">
        <link rel="stylesheet" type="text/css" href="css/registrarse.css">
        <script type="text/javascript" src="./Jquery/jquery-1.11.1.js"></script>
        <script src="eventos_inicio.js"></script>
    </head>
    <body>
        <header>
            <div id="subheader">
                <div id="logo"><p><a href="index.php">WhDIG</a></p></div>
                
               
                <div id="logo2"><h2>Where do I go?</h2></div>
                
            </div>
       
        </header>
        
        <section id="wrap">
            <section id ="main">
                <section id="tituloRegistro">
                    <article>
                        <p>Formulario de registro</p>
                    </article>
                </section>
                <section id="formularioRegistro">
                    
                    <article id="articleFormulario">
                    <form>
                       
                            
                           
                        <p class="pInformacion">Información requerida</p>
                       
                       
                        <table id="tabla2">
                            
                      
                            <tr>   
                                <td class="fila"> <label for ="nombre">Nombre:</label></td>
                                <td><input class="inp" type="text" id="nombre" placeholder="Escriba su nombre" required></td>
                            </tr>
                        
                            <tr>
                                <td class="fila"><label for ="email">Email:</label></td>
                                <td><input class="inp" type="email" id="email" placeholder="Escriba su email" required></td>
                            </tr>
                        <tr>
                        <td class="fila"><label for ="contrasena">Contraseña:</label></td>
                        <td><input class="inp" type="password" id="contrasena" placeholder="Escriba su contraseña" required></td>
                        </tr>
                        </table>
                        <table id="tabla3">
                       <tr>
                           <td><label for ="verificarContrasena">Verificar contraseña:</label></td>
                           <td><input class="inp" type="password" id="VerificarContrasena" placeholder="Repita su contraseña" required></td>
                       </tr>
                        </table>
                         <table id="tabla4">
                            <tr>
                        <td class="fila"><label for ="localidad">Localidad:</label></td>
                        <td><input class="inp" list="localidad" name="loc" placeholder="Escriba su localidad" required></td>
                        
                            <datalist id="localidad" >
                                     
                                     <?php include("./PHP/cargar_ciudad.php");?> 
                                   
                                     
                                     
                            </datalist>
                            </tr>
                        
                        <tr>
                        <td class="fila"><label for ="provincia">Provincia:</label></td>
                        <td><input class="inp" list="provincia" name="prov" placeholder="Escriba su provincia" required></td>
                        
                            <datalist id="provincia" >
                                     
                                     <?php include("./PHP/cargar_provincia.php");?> 
                                   
                                     
                                     
                            </datalist>
                        </tr>
                       <tr>
                        <td class="fila"><label for ="genero">Genero:</label></td>
                        <td><input type="radio" name="genero" value="M" required/> M
                        <input type="radio" name="genero" value="F" required/> F </td>
                        </tr>
                        </table>
                           
                        <p class="pInformacion">Información adicional</p>
                        
                       <table id="tabla6">
                        <tr>
                        <td><label for ="fecha">Fecha de Nacimiento:</label></td>
                        <td><input type="date" id="fecha"></td>
                        </tr>
                       </table>
                        <div id="divInformacion">
                        <label for ="informacion"></label>
                        <input type="checkbox" name="informacion"/> Permitir recibir información.
                        </div>
                        
                    </form>
                    </article>
                </section>
                
    
            </section>

            <div id="copyright"><p>Copyright © 2014 | Pedro Javier Pérez Mora</p></div>
        </section>
               
        
        <?php
        // put your code here
        ?>
    </body>
</html>
