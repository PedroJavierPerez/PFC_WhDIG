<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexion.php");

$fecha = utf8_decode($_POST["fecha"]);
$provincia = utf8_decode($_POST["provincia"]);
$municipio = utf8_decode($_POST["municipio"]);
$tipo = utf8_decode($_POST["tipo"]);
$local = utf8_decode($_POST["local"]);
if(($fecha != NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
      $i =0;
      $encontrado = FALSE;
    while($registro4 = $ejecutar_consulta4->fetch_assoc()){
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        $i++;
        $encontrado = TRUE;
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        $i++;
        if(($i == $row2) && (!encontrado)){
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        }
    }
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
      
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
      $i =0;
      $encontrado = FALSE;
    while($registro4 = $ejecutar_consulta4->fetch_assoc()){
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        $i++;
        $encontrado = TRUE;
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        $i++;
        if(($i == $row2) && (!encontrado)){
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        }
    }
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
      
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local == NULL)){
    $consulta="SELECT * FROM evento ORDER BY Id_evento DESC";

$ejecutar_consulta = $conexion->query($consulta);

    while ($registro = $ejecutar_consulta->fetch_assoc()){

    $nombre_evento= utf8_encode($registro["Nombre"]);
    $descripcion= utf8_encode($registro["Descripcion"]);
    $fecha= utf8_encode($registro["Fecha"]);
    $hora= utf8_encode($registro["Hora"]);
    $Idnegocio = utf8_encode($registro["Id_negocio"]);
    
    $consulta2="SELECT * FROM negocio WHERE $Idnegocio = Id_negocio";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    $registro2 = $ejecutar_consulta2->fetch_assoc();
    $provincia= utf8_encode($registro2["Provincia"]);

    
    echo "<a href=''><article>";
    echo "<hgroup><h4 class='titulo'>$nombre_evento ($provincia)</h4></hgroup>";
    echo "<p>";
    echo "<ul>";
    echo   "<li>$descripcion</li>";
    echo   "<li class='fechalista'>+ Fecha: $fecha</li>";
    echo   "<li>+ Hora: $hora</li>";
    echo "</ul>";
    echo "</p>";
    echo "</article></a>";
    }
}else{
        if(($fecha == NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local == NULL)){

       
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
       
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
        $Idnegocio = utf8_encode($registro3["Id_negocio"]);
        
        $consulta2="SELECT * FROM negocio WHERE $Idnegocio = Id_negocio";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    $registro2 = $ejecutar_consulta2->fetch_assoc();
    $prov= utf8_encode($registro2["Provincia"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        
        
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    
    
}else{
        if(($fecha == NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
      $i =0;
      $encontrado = FALSE;
    while($registro4 = $ejecutar_consulta4->fetch_assoc()){
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        $i++;
        $encontrado = TRUE;
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        $i++;
        if(($i == $row2) && (!encontrado)){
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        }
    }
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
          if(($fecha == NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
      $i =0;
      $encontrado = FALSE;
    while($registro4 = $ejecutar_consulta4->fetch_assoc()){
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        $i++;
        $encontrado = TRUE;
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        $i++;
        if(($i == $row2) && (!encontrado)){
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        }
    }
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
            if(($fecha != NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local == NULL)){

       
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
       
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
        $Idnegocio = utf8_encode($registro3["Id_negocio"]);
        
        $consulta2="SELECT * FROM negocio WHERE $Idnegocio = Id_negocio";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    $registro2 = $ejecutar_consulta2->fetch_assoc();
    $prov= utf8_encode($registro2["Provincia"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        
        
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    
    
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE  Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local == NULL)){
    
       
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Fecha = '".$fecha."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
       
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
        $Idnegocio = utf8_encode($registro3["Id_negocio"]);
        
        $consulta2="SELECT * FROM negocio WHERE $Idnegocio = Id_negocio";
    $ejecutar_consulta2 = $conexion->query($consulta2);
    $registro2 = $ejecutar_consulta2->fetch_assoc();
    $prov= utf8_encode($registro2["Provincia"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        
        
            
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    
    
}else{
        if(($fecha != NULL)&&($provincia == NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE  Nombre = '".$local."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha == NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia == NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha. "' Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio == NULL)&&($tipo != NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo == NULL)&&($local != NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Nombre = '".$local."' AND Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}else{
    if(($fecha != NULL)&&($provincia != NULL)&&($municipio != NULL)&&($tipo != NULL)&&($local == NULL)){
    
    $consulta4="SELECT * FROM negocio WHERE Provincia = '".$provincia."' AND Localidad = '".$municipio."'";
    $ejecutar_consulta4 = $conexion->query($consulta4);
    $row2 = mysqli_num_rows($ejecutar_consulta4);
    
    if($row2 != 0){
        
    $registro4 = $ejecutar_consulta4->fetch_assoc();
    $Idnegocio = utf8_encode($registro4["Id_negocio"]);
    $prov = utf8_encode($registro4["Provincia"]);
       
    
    $consulta3="SELECT * FROM evento WHERE Fecha = '".$fecha."' AND Tipo = '".$tipo."' AND Id_negocio = '".$Idnegocio."' ORDER BY Id_evento DESC";
    $ejecutar_consulta3 = $conexion->query($consulta3);
    $row = mysqli_num_rows($ejecutar_consulta3);
    
    if($row != 0){
        
    While($registro3 = $ejecutar_consulta3->fetch_assoc()){
        
        $nombre_evento = utf8_encode($registro3["Nombre"]);
        $hora = utf8_encode($registro3["Hora"]);
        $descripcion = utf8_encode($registro3["Descripcion"]);
        $fech = utf8_encode($registro3["Fecha"]);
    
        echo "<a href=''><article>";
        echo "<hgroup><h4 class='titulo'>$nombre_evento ($prov)</h4></hgroup>";
        echo "<p>";
        echo "<ul>";
        echo   "<li>$descripcion</li>";
        echo   "<li class='fechalista'>+ Fecha: $fech</li>";
        echo   "<li>+ Hora: $hora</li>";
        echo "</ul>";
        echo "</p>";
        echo "</article></a>";
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 1</p>";
        
    }
    }else{
        echo "<p>No existe ningun evento que cumpla las condiciones de filtrado 2</p>";
    }
}
}
}
}
}
}
}
}
}
}
}
}    

}
}
}
}
}
}
}
}
}
}

}
}
} 
    
}
}   
}
}
