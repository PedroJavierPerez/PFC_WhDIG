<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function conectarse(){
    $servidor="localhost";
    $usuario="root";
    $password="";
    $bd="whdig";
    
    $conectar = new mysqli($servidor,$usuario,$password,$bd);
   
    if($conectar->connect_errno){
        printf("Connect failed: %s\n",$conectar->connect_error);
        exit();
    }else{
        return $conectar;
    }
}

$conexion = conectarse();
