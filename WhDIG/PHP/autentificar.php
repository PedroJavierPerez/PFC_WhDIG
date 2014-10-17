<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("./conexion.php");

$email = utf8_decode($_POST["email"]);
$pass = utf8_decode($_POST["pass"]);


$consulta1 = "SELECT * FROM usuario WHERE Email = '".$email."' AND Contrasena ='".$pass."'";
$ejecutar_consulta1 = $conexion->query($consulta1);
$row1 = mysqli_num_rows($ejecutar_consulta1);

if($row1 != 0){
 
 echo "True";

}else{
  echo "False";
}

