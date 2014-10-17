<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//include("./PHP/conexion.php");

$consulta="SELECT * FROM negocio ORDER BY Id_negocio";
$ejecutar_consulta = $conexion->query($consulta);

while ($registro = $ejecutar_consulta->fetch_assoc()){

    $nombre_negocio= utf8_encode($registro["Nombre"]);
    
    echo "<option value='$nombre_negocio'>$nombre_negocio</option>";
    
}

