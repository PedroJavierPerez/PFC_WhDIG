<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexion.php");

$fechaActual = date("Y-m-d");
$consulta="SELECT Id_evento, Nombre, Descripcion, Hora, Id_negocio, Fecha FROM evento WHERE Fecha >= '".$fechaActual."' ORDER BY Id_evento DESC";

$ejecutar_consulta = $conexion->query($consulta);

while ($registro = $ejecutar_consulta->fetch_assoc()){
//    echo "<option value='".$registro["provincia"]."'> " .$registro["provincia"]."</option>";
    $Idevento= utf8_encode($registro["Id_evento"]);
    $nombre_evento= utf8_encode($registro["Nombre"]);
    $descripcion= utf8_encode($registro["Descripcion"]);
        $fech= utf8_encode($registro["Fecha"]);
        $fec=date_create($fech);
    $fecha=date_format($fec, 'd-m-Y');
        $hora_string= utf8_encode($registro["Hora"]);
        $hora_time = date_create($hora_string);
    $hora = date_format($hora_time, 'G:i');
    $Idnegocio = utf8_encode($registro["Id_negocio"]);
    
    $consulta2="SELECT * FROM negocio WHERE $Idnegocio = Id_negocio";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    $registro2 = $ejecutar_consulta2->fetch_assoc();
    $provincia= utf8_encode($registro2["Provincia"]);

    
    echo "<a id='$Idevento' href=''><article>";
    echo "<hgroup><h4 class='titulo'>$nombre_evento ($provincia)</h4></hgroup>";
    echo "<p>";
    echo "<ul>";
    echo   "<li>$descripcion</li>";
    echo   "<li class='fechalista'>+ Fecha: $fecha</li>";
    echo   "<li>+ Hora: $hora</li>";
    echo "</ul>";
    echo "</p>";
    echo "</article></a>";
}

