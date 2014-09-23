<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 
include("conexion.php");

    
if($_POST['id'] == NULL){
    
    $consulta="SELECT * FROM municipios ORDER BY nombre";
    $ejecutar_consulta = $conexion->query($consulta);

    while ($registro = $ejecutar_consulta->fetch_assoc()){

        $nombre_municipio= utf8_encode($registro["nombre"]);
    
        echo "<option value='$nombre_municipio'>$nombre_municipio</option>";
    }



}else{

    $nomb_provincia = utf8_decode($_POST["id"]);
    $consulta2="SELECT * FROM provincias WHERE provincia = '" .$nomb_provincia. "'";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    
    while($registro2 = $ejecutar_consulta2->fetch_assoc()){
        
        $id_provincia= utf8_encode($registro2["id_provincia"]);
    
    }
 
    $consulta="SELECT * FROM municipios WHERE id_provincia =" .$id_provincia;
    $ejecutar_consulta = $conexion->query($consulta);


    while ($registro = $ejecutar_consulta->fetch_assoc()){

        $nombre_municipio= utf8_encode($registro["nombre"]);
    
        echo "<option value='$nombre_municipio'>$nombre_municipio</option>";
    
    }

}
