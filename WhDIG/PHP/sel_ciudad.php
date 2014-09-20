<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include("conexion.php");



    
if($id == NULL){
    
$consulta="SELECT * FROM municipios ORDER BY nombre";
$ejecutar_consulta = $conexion->query($consulta);
echo "<option value='Jaen'>Jaen</option>";while ($registro = $ejecutar_consulta->fetch_assoc()){
//    echo "<option value='".$registro["provincia"]."'> " .$registro["provincia"]."</option>";
    $nombre_municipio= utf8_encode($registro["nombre"]);
    echo "<option value='$nombre_municipio'>$nombre_municipio</option>";
}



}else{
    
    $consulta2="SELECT id_provincia FROM provincias WHERE provincia = $id";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    
    $consulta="SELECT * FROM municipios WHERE id_provincia = $ejecutar_consulta2";
$ejecutar_consulta = $conexion->query($consulta);

while ($registro = $ejecutar_consulta->fetch_assoc()){
//    echo "<option value='".$registro["provincia"]."'> " .$registro["provincia"]."</option>";
    $nombre_municipio= utf8_encode($registro["nombre"]);
    echo "<option value='$nombre_municipio'>$nombre_municipio</option>";
    
}
}
