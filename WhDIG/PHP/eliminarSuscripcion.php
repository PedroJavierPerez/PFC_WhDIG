<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("./conexion.php");

$email = utf8_decode($_POST["email"]);

$consulta1 = "SELECT * FROM usuario_no_registrado WHERE Email = '".$email."'";
$ejecutar_consulta1 = $conexion->query($consulta1);
$row1 = mysqli_num_rows($ejecutar_consulta1);

if($row1 != 0){
$consulta2 = "DELETE FROM usuario_no_registrado WHERE Email = '".$email."'";
$ejecutar_consulta2 = $conexion->query($consulta2);

if($ejecutar_consulta2==True){
    echo "Eliminación exitosa";
}else{
    echo "La eliminación falló";
}
}else{
    echo "El email dado no esta suscrito";
}

//mysqli_close($conexion);