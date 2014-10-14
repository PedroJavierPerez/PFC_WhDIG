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
        <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css">
        <link rel="stylesheet" type="text/css" href="css/detalles.css">
        <script type="text/javascript" src="./Jquery/jquery-1.11.1.js"></script>
        <script type="text/javascript" src="./Jquery/jquery.lightbox-0.5.js"></script>
        
        <!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
        <script type="text/javascript" src="eventos_index.js"></script>
        <script type="text/javascript" src="Jquery/detalles.js"></script>

    </head>
    <body>
        <header>
            <div id="subheader">
                <div id="logo"><p><a href="">WhDIG</a></p></div>
                
                <div id="identificarse">
                    <div id="formulario">
                    <form id="formAutentificar">
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
                <section id="detallesEvento">
                    <?php
                        $Idevento = $_COOKIE["var"];
                        include("./PHP/cargar_detallesEvento.php");
                    ?>
                </section>
                
            </section>

            <div id="copyright"><p>Copyright © 2014 | Pedro Javier Pérez Mora</p></div>
        </section>
               
        
        <?php
        // put your code here
        ?>
    </body>
</html>

