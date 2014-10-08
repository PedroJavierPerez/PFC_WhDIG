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
        <script type="text/javascript" src="./Jquery/jquery-1.11.1.js"></script>
        <script src="eventos_inicio.js"></script>
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

                <?php include("./PHP/cargar_eventos.php"); ?>
                </section>
                
                <aside>
                    
                    <section class="filtro">
                        <div id="eventoshoy">
                            <hgroup><h3>Eventos de hoy:<br><?php echo date("d-m-Y");?></h3></hgroup>
                        <ul>
                            <?php include("./PHP/cargar_eventosHoy.php"); ?>
                           
                        </ul>
                                
                        </div>
                        
                    </section>
                    
                    <section class="filtro" id="idFiltro">
                    
                        <form id= "formFiltro">
                             <label for ="fechaInicio">Desde:</label>
                             <input type="date" id="fechaInicio">
                             <label for ="fechaInicio">Hasta:</label>
                             <input type="date" id="fechaFin">
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
                             <input list="tipo" name="tip">
                            
                             <datalist id="tipo" >
                                     
                                     <option value="Noche">
                                     <option value="Bares">
                                     <option value="Pubs">
                                     <option value="Deporte">
                                     <option value="Charlas y Conferencias">
                                     <option value="Conciertos">
                                     <option value="Cursos">    
                                     <option value="Espectáculos">
                                     <option value="Exposiciones">
                                     <option value="Ferias">
                                     <option value="Libros">
                                     <option value="Cine">
                                     <option value="Teatro">
                                     <option value="Hoteles">
                                     <option value="Otros">

                             </datalist>
                             <label for ="local">Local:</label>
                             <input list="local" name="loc">
                                 <datalist id="local">
                                    <?php include("./PHP/cargar_negocios.php");?>  
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
