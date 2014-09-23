<!DOCTYPE html>

<!--To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Web de eventos de ocio">
        <meta name="keywords" content="evento,ocio,bar,deporte,pub">
        <title>WhDIG</title>
        <link rel="stylesheet" type="text/css" href="css/estilos_principal.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="cambio_filtroProvincia.js"></script>
    </head>
    <body>
        <header>
            <div id="subheader">
                <div id="logo"><p><a href="">WhDIG</a></p></div>
                
                <div id="identificarse">
                    <div id="formulario">
                    <form>
                        <label for ="email">Email:</label>
                        <input type="email" id="email" placeholder="Escribe tu email" required>
                        <label for ="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" placeholder="Escribe tu contraseña" required>
                        <input class="botones" type="submit" value="Entrar" id="btnEntrar">
                        
                            
                    </form>
                    <div id="olvidarContraseña">
                    <p><a href="">¿Has olvidado tu contraseña?</a></p>
                    </div>
                    </div>
                </div>
                <div id="logo2"><h2>Where do I go?</h2></div>
                <div id="Registrarse"> <input class="botones" id="btnRegistrarse" type="button" value="Regístrate"></div>
            </div>
       
        </header>
        
        <section id="wrap">
            <section id ="main">
                <section id="bienvenidos">
                    <article>
                        <hgroup><h3>Bienvenido a nuestra web de eventos de ocio</h3></hgroup>
                    </article>
                </section>
                <section id="eventos">
<!--                   <a href=""> <article>
                        <hgroup><h4 class="titulo">Cerveza a 1€ (Jaén)</h4></hgroup>
                        <p>
                        <ul>
                            <li>Jueves cerveza a 1€ desde las 22:00 a las 00:00 de la noche.
                                No te lo puedes perder, habra muchisimos regalos y sorteos.</li>
                            <li class="fechalista">+ Fecha: 05/09/2014</li>
                            <li>+ Hora: 22:00</li>
                        </ul>
                        </p>
                       
                       </article></a>
                    
                    <a href=""> <article>
                        <hgroup><h4 class="titulo">Cerveza a 1€ (Jaén)</h4></hgroup>
                        <p>
                        <ul>
                            <li>Jueves cerveza a 1€ desde las 22:00 a las 00:00 de la noche.</li>
                            <li class="fechalista">+ Fecha: 05/09/2014</li>
                            <li>+ Hora: 22:00</li>
                        </ul>
                        </p>
                        </article> </a>-->
                    
                     <!--<a href=""><article>-->
                             <?php include("./PHP/cargar_eventos.php"); ?>
<!--                        <hgroup><h4 class="titulo">Cerveza a 1€ (Jaén)</h4></hgroup>
                        <p>
                        <ul>
                            <li>Jueves cerveza a 1€ desde las 22:00 a las 00:00 de la noche.</li>
                            <li class="fechalista">+ Fecha: 05/09/2014</li>
                            <li>+ Hora: 22:00</li>
                        </ul>
                        </p>-->
                         <!--</article></a>-->
                </section>
                
                <aside>
                    <section class="filtro">
<!--                        <hgroup><h5>Eventos de hoy:</h5></hgroup>
                        <ul>
                            <li><a href="">22:00 - Cerveza 1€</a></li>
                            <li><a href="">18:00 - Curso de cocina</a></li>
                        </ul>-->
                         <form>
                             <label for ="fecha">Fecha:</label>
                             <input type="date" id="fecha">
                              <label for ="provincia">Provincia:</label>
                              <input list ="provincia" name="pro">
                              <datalist id="provincia" >
                                     
                                     <?php include("./PHP/cargar_provincia.php"); ?>

                            
                             </datalist>
                             <label for ="ciudad">Ciudad:</label>
                             <input list="ciudad" name="ciu" >
                                 <datalist id="ciudad" >
                                     
                                     <?php include("./PHP/cargar_ciudad.php");?> 
                                   
                                     
                                     
                                 </datalist>
                             
                             <label for ="tipo">Tipo:</label>
                             <input list="tipo">
                            
                             <datalist id="tipo" >
                                     
                                    

                            
                             </datalist>
                             <label for ="local">Local:</label>
                             <input list="local">
                                 <datalist id="local">
                                     <option value="Sala goa">
                                     <option value=" La bodega">  
                                 </datalist>
                             <input class="botones" type="submit" value="Filtrar" id="btnFiltrar">
                         </form>
                    </section>
                    
                    <section class="filtro">
                        <div id="informacion">
                        <hgroup><h3>Suscríbete:</h3></hgroup>
                        
                            <form>
                                <label for ="Iemail">Email:</label>
                                <input type="email" id="Iemail" placeholder="Escribe tu email" required>
                                <input class="botones" type="submit" value="Recibir" id="btnRecibir">
                                <input  class="botones" type="submit" value="No Recibir" id="btnNoRecibir">
                            </form>
                            <p>
                                Introduzca su email para recibir información de eventos o para dejar de recibirla.
                            </p>
                                
                        </div>
                        
                    </section>
                    
                </aside>
            </section>
<!--            <footer>
                <section id="acerca-de">
                    <article>
                        <hgroup><h3>Acerca de...</h3></hgroup>
                        <p>lkndsfgkhsfdkjghskfdljgblkjsfdbgkdgdlkfgbdfkjg
                        fghgfhgfhgfhdgfhfghdfghghgfhgfdhdghghghgfhdfhdgfhg
                        dfghdhghgh</p>
                    </article>
                </section>
                
                <section id="redes-s">
                    <div class="email"><a href="#"></a></div>
                    <div class="twitter"><a href="#"></a></div>
                    <div class="youtube"><a href="#"></a></div>
                    <div class="facebook"><a href="#"></a></div>
                </section>
 
            </footer>-->
            <div id="copyright"><p>Copyright © 2014 | Pedro Javier Pérez Mora</p></div>
        </section>
               
        
        <?php
        // put your code here
        ?>
    </body>
</html>








