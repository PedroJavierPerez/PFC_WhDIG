<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include("conexion.php");

$consulta="SELECT * FROM provincias ORDER BY provincia";
$ejecutar_consulta = $conexion->query($consulta);

while ($registro = $ejecutar_consulta->fetch_assoc()){

    $nombre_provincia= utf8_encode($registro["provincia"]);
    echo "<option value='$nombre_provincia'>$nombre_provincia</option>";
    
}

