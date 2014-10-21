<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexion.php");

$email = utf8_decode($_POST["email"]);
$nombre = utf8_decode($_POST["nombre"]);
$pass = utf8_decode($_POST["pass"]);
$genero = utf8_decode($_POST["genero"]);
$localidad = utf8_decode($_POST["localidad"]);
$provincia = utf8_decode($_POST["provincia"]);
$fecha = utf8_decode($_POST["fecha"]);
    $fecha = empty($_POST['fecha']) ? 'NULL' : "'".$fecha."'";
$informacion = utf8_decode($_POST["informacion"]);

$consulta1 = "SELECT * FROM usuario WHERE email = '".$email."'";
$ejecutar_consulta1 = $conexion->query($consulta1);
$row1 = mysqli_num_rows($ejecutar_consulta1);

if($row1 == 0){
$consulta2 = "INSERT INTO usuario (Email, Nombre, Contrasena, Genero, Localidad, Provincia,"
        . " FechaNacimiento, RecibirInformacion, Propietario ) VALUES ('".$email."','".$nombre."','"
        .$pass."','".$genero."','".$localidad."','".$provincia."',".$fecha. ",'".$informacion."','0')";
$ejecutar_consulta2 = $conexion->query($consulta2);

if($ejecutar_consulta2==True){
    echo "True";
}else{
    echo "Registro falló";
}
}else{
    echo "Email ya existente";
}

mysqli_close($conexion);