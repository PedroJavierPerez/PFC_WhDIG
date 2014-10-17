<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("conexion.php");


$consulta="SELECT * FROM municipios ORDER BY nombre";
$ejecutar_consulta = $conexion->query($consulta);

while ($registro = $ejecutar_consulta->fetch_assoc()){

    $nombre_municipio= utf8_encode($registro["nombre"]);
    
    echo "<option value='$nombre_municipio'>$nombre_municipio</option>";
    
}

