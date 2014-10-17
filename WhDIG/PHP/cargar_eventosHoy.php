<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include("./PHP/conexion.php");

$fechaActual= date("Y-m-d");

$consulta="SELECT Nombre, Hora, Id_negocio FROM evento WHERE Fecha = '".$fechaActual."' ORDER BY Hora";
$ejecutar_consulta = $conexion->query($consulta);

$row = mysqli_num_rows($ejecutar_consulta);
   
 if($row != 0){
     
    while ($registro = $ejecutar_consulta->fetch_assoc()){
        $nombre_evento= utf8_encode($registro["Nombre"]);
            $hora_string= utf8_encode($registro["Hora"]);
            $hora_time = date_create($hora_string);
        $hora = date_format($hora_time, 'G:i');
        $Idnegocio = utf8_encode($registro["Id_negocio"]); 
    
        $consulta2="SELECT Nombre FROM negocio WHERE Id_negocio = '".$Idnegocio."'";
        $ejecutar_consulta2 = $conexion->query($consulta2);
       
        $registro2 = $ejecutar_consulta2->fetch_assoc();
        $nombre_local= utf8_encode($registro2["Nombre"]);
        
        echo "<a href=''><div id ='ideventoshoy'><li><span id='spanHora'>$hora</span> - <span id = 'spanNombreEvento'>$nombre_evento</span> <br> <p id='pNombreLocal'>$nombre_local</p></li></div></a>";
               
    }
}

