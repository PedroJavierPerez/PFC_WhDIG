<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("./conexion.php");

$email = utf8_decode($_POST["email"]);

$consulta1 = "SELECT * FROM usuario_no_registrado WHERE email = '".$email."'";
$ejecutar_consulta1 = $conexion->query($consulta1);
$row1 = mysqli_num_rows($ejecutar_consulta1);

if($row1 == 0){
$consulta2 = "INSERT INTO usuario_no_registrado (email) VALUES ('".$email."')";
$ejecutar_consulta2 = $conexion->query($consulta2);

if($consulta==True){
    echo "Registro exitoso";
}else{
    echo "Registro falló";
}
}else{
    echo "Email ya existente";
}