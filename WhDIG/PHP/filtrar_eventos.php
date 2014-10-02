<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexion.php");

$fechaI = utf8_decode($_POST["fechaI"]);
$fechaF = utf8_decode($_POST["fechaF"]);
$provincia = utf8_decode($_POST["provincia"]);
$municipio = utf8_decode($_POST["municipio"]);
$tipo = utf8_decode($_POST["tipo"]);
$local = utf8_decode($_POST["local"]);

//if(($fechaI != NULL)||($fechaF != NULL)||($tipo != NULL)){
$consulta = "SELECT * FROM evento WHERE 1";
//}
//if(($provincia != NULL)||($municipio != NULL)||($local != NULL)){
$consulta2 = "SELECT * FROM negocio WHERE 1";
//}
if(($fechaI != NULL)&&($fechaF != NULL)){
    $fechaActual = date("Y-m-d");
    if($fechaI < $fechaActual){
        $fechaI = $fechaActual;
    }
    $consulta.=" AND (Fecha BETWEEN '".$fechaI."' AND '" .$fechaF."')";
}else{
    If($fechaI != NULL){
        $fechaActual = date("Y-m-d");
        if($fechaI < $fechaActual){
          $fechaI = $fechaActual;
        }
        $fechaAux = "2099-12-31";
        $consulta.=" AND (Fecha BETWEEN '".$fechaI."' AND '" .$fechaAux."')";
    }else{
        If($fechaF != NULL){
            $fechaActual = date("Y-m-d");
            $consulta.=" AND (Fecha BETWEEN '".$fechaActual."' AND '" .$fechaF."')";
        }
    }
}
If($provincia != NULL){
    $consulta2.=" AND Provincia = '".$provincia."'";
}

If($municipio != NULL){
    $consulta2.=" AND Localidad = '".$municipio."'";
}

If($tipo != NULL){
    $consulta.=" AND Tipo = '".$tipo."'";
}

If($local != NULL){
    $consulta2.=" AND Nombre = '".$local."'";
}

if(($provincia != NULL)||($municipio != NULL)||($local != NULL)){
    
     $ejecutar_consulta = $conexion->query($consulta2);
     $row1 = mysqli_num_rows($ejecutar_consulta);
    
     if($row1 != 0){
         while($registro = $ejecutar_consulta->fetch_assoc()){
         $Idnegocio = utf8_encode($registro["Id_negocio"]);
         $prov = utf8_encode($registro["Provincia"]);
         
         $consulta.=" AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
         $ejecutar_consulta2 = $conexion->query($consulta);
         $row2 = mysqli_num_rows($ejecutar_consulta2);
    
         if($row2 != 0){
             While($registro2 = $ejecutar_consulta2->fetch_assoc()){
        
                $nombre_evento = utf8_encode($registro2["Nombre"]);
                $hora = utf8_encode($registro2["Hora"]);
                $descripcion = utf8_encode($registro2["Descripcion"]);
                $fech = utf8_encode($registro2["Fecha"]);

                echo "<a href=''><article>";
                echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
                echo "<p>";
                echo "<ul>";
                echo   "<li>$descripcion</li>";
                echo   "<li class='fechalista'>+ Fecha: $fech</li>";
                echo   "<li>+ Hora: $hora</li>";
                echo "</ul>";
                echo "</p>";
                echo "</article></a>";
             }
         }else{
          echo "<p class='NoFiltro'>No se encontraron eventos que cumplan las condiciones de filtrado.</p>";
         }
         }
     }else{
          echo "<p class='NoFiltro'>No se encontraron eventos que cumplan las condiciones de filtrado.</p>";
     }
    
}else{
     $consulta.=" ORDER BY Id_evento DESC";
     $ejecutar_consulta = $conexion->query($consulta);
     $row1 = mysqli_num_rows($ejecutar_consulta);
     
     if($row1 != 0){
         while($registro = $ejecutar_consulta->fetch_assoc()){
         $Idnegocio = utf8_encode($registro["Id_negocio"]);
         $nombre_evento = utf8_encode($registro["Nombre"]);
         $hora = utf8_encode($registro["Hora"]);
         $descripcion = utf8_encode($registro["Descripcion"]);
         $fech = utf8_encode($registro["Fecha"]);
//         echo "id:" . $Idnegocio . "<br>";

         $consultaAux = $consulta2." AND Id_negocio = '".$Idnegocio."'";
         $ejecutar_consulta2 = $conexion->query($consultaAux);
         $row2 = mysqli_num_rows($ejecutar_consulta2);
        
         while($registro2 = $ejecutar_consulta2->fetch_assoc()){
         $prov = utf8_encode($registro2["Provincia"]);
        
                

                echo "<a href=''><article>";
                echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
                echo "<p>";
                echo "<ul>";
                echo   "<li>$descripcion</li>";
                echo   "<li class='fechalista'>+ Fecha: $fech</li>";
                echo   "<li>+ Hora: $hora</li>";
                echo "</ul>";
                echo "</p>";
                echo "</article></a>";
         }  
         }
     }else{
         echo "<p class='NoFiltro'>No se encontraron eventos que cumplan las condiciones de filtrado.</p>";
     }
    
}
