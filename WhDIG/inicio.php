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
        <link rel="stylesheet" type="text/css" href="css/estilos_inicio.css">
    </head>
    <body>
        <header>
            <div id="subheader">
                <div id="logo"><p><a href="">WhDIG</a></p></div>
                
               
                <div id="logo2"><h2>Where do I go?</h2></div>
                 <nav>
                     <ul>
                         <li><a href="">Inicio</a></li>
                         <li><a href="">Mi cuenta</a></li>
                         <li><a href="">Asistencia a eventos</a></li>
                         <li><a href="index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>
       
        </header>
        
        <section id="wrap">
            <section id ="main">
                
                <section id="eventos">
                   <a href=""> <article>
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
                        </article> </a>
                    
                     <a href=""><article>
                        <hgroup><h4 class="titulo">Cerveza a 1€ (Jaén)</h4></hgroup>
                        <p>
                        <ul>
                            <li>Jueves cerveza a 1€ desde las 22:00 a las 00:00 de la noche.</li>
                            <li class="fechalista">+ Fecha: 05/09/2014</li>
                            <li>+ Hora: 22:00</li>
                        </ul>
                        </p>
                         </article></a>
                </section>
                
                <aside>
                    
                    <section class="filtro">
                        <div id="eventoshoy">
                           <hgroup><h3>Eventos de hoy: 08/09/2014</h3></hgroup>
                        <ul>
                            <li><a href="">22:00 - Cerveza 1€</a></li>
                            <li><a href="">18:00 - Curso de cocina</a></li>
                        </ul>
                                
                        </div>
                        
                    </section>
                    
                    <section class="filtro" id="idFiltro">
                    
                         <form>
                             <label for ="fecha">Fecha:</label>
                             <input type="date" id="fecha">
                             <label for ="ciudad">Ciudad:</label>
                             <input list="ciudad">
                                 <datalist id="ciudad">
                                     <option value="Valencia">
                                     <option value="Madrid">  
                                 </datalist>
                             <label for ="tipo">Tipo:</label>
                             <input list="tipo">
                                 <datalist id="tipo">
                                     <option value="Noche">
                                     <option value="Deporte">  
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
                    
                    
                    
                </aside>
            </section>

            <div id="copyright"><p>Copyright © 2014 | Pedro Javier Pérez Mora</p></div>
        </section>
               
        
        <?php
        // put your code here
        ?>
    </body>
</html>
