<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexion.php");

//$Idevento = utf8_decode($_POST["ID"]);

$consulta="SELECT * FROM evento WHERE Id_evento = '".$Idevento."'";
$ejecutar_consulta = $conexion->query($consulta);
$registro = $ejecutar_consulta->fetch_assoc();

    $nombre_evento= utf8_encode($registro["Nombre"]);
    $descripcion= utf8_encode($registro["Descripcion"]);
    $foto= utf8_encode($registro["Foto"]);
    $tipo= utf8_encode($registro["Tipo"]);
        $fech= utf8_encode($registro["Fecha"]);
        $fec=date_create($fech);
    $fecha=date_format($fec, 'd-m-Y');
        $hora_string= utf8_encode($registro["Hora"]);
        $hora_time = date_create($hora_string);
    $hora = date_format($hora_time, 'G:i');
    $Idnegocio = utf8_encode($registro["Id_negocio"]);
    $Idestadisticas = utf8_encode($registro["Id_estadisticas"]);

    
$consulta2="SELECT * FROM estadisticas WHERE Id_estadisticas = '".$Idestadisticas."'";
$ejecutar_consulta2 = $conexion->query($consulta2);
$registro2 = $ejecutar_consulta2->fetch_assoc();

        $asistentes = utf8_encode($registro2["Asistentes"]);

$consulta3="SELECT * FROM negocio WHERE Id_negocio = '".$Idnegocio."'";
$ejecutar_consulta3 = $conexion->query($consulta3);
$registro3 = $ejecutar_consulta3->fetch_assoc(); 

        $nombre_negocio= utf8_encode($registro3["Nombre"]);
        $localidad= utf8_encode($registro3["Localidad"]);
        $provincia= utf8_encode($registro3["Provincia"]);
        $calle= utf8_encode($registro3["Calle"]);
        $numero= utf8_encode($registro3["Numero"]);
        $telefono= utf8_encode($registro3["Telefono"]);
        
        
    echo "<article>";
    echo "<hgroup><h4 class='titulo'>$nombre_evento</h4></hgroup>";
    echo "<div id='galeria'>";
    echo "<a href= 'Fotos/$foto' title='$nombre_evento'>";
    echo "<img class='imag' src='Fotos/$foto'/>";
    echo "</a>";
    echo "</div>";
    echo "<div id='lista'>";
    echo "<p>";
    echo "<ul class= 'listaDetalles' id='datosEvento'>";
    echo   "<li><span>+ Tipo:</span> $tipo</li>";
    echo   "<li><span>+ Fecha:</span> $fecha</li>";
    echo   "<li><span>+ Hora:</span> $hora</li>";
    echo   "<li><span>+ Asistentes:</span> $asistentes</li>";
    echo   "<li id='descri'><span>+ Descripción:</span> $descripcion</li>";
    echo "</ul>";
    echo "<ul class= 'listaDetalles' id='datosNegocio'>";
    echo   "<li><span>+ Nombre local:</span> $nombre_negocio</li>";
    echo   "<li><span>+ Dirección:</span> Calle $calle,<span> Nº</span> $numero</li>";
    echo   "<li><span>+ Localidad:</span> $localidad</li>";
    echo   "<li><span>+ Provincia:</span> $provincia</li>";
    echo   "<li><span>+ Teléfono:</span> $telefono</li>";
    echo "</ul>";
    echo "</p>";
    echo "</div>";
    echo "</article>";

   