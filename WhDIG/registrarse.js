/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    

    
      //Cuando se pulsa en el input verificar contraseña se selecciona el texto.
      $(".inp").click(function(){
        
            this.select();
        
      });
    
    //Cuando se cambia el input provincia carga los municipios de esa provincia.
    $("input[name=prov]").change(function(){
       
        cambioProvincia();  
    });
    
    
        $("#formRegistro").submit(function(){ 
            
            var pass = $("#Rcontrasena").val();
            var verificarPass = $("#verificarContrasena").val();
            
            if(pass === verificarPass){
                registrar();
      //        $("#Iemail").val("");
                return false;
            }else{
                alert("La contraseña no coincide"); 
                return false;
            }
            
        });
    
    
     //Obtiene la contraseña y email de usuario para validar y iniciar sesión.
    $("#formAutentificar").submit(function(){ 
   
        autentificar();
        return false;
    });
    
});

function registrar(){
    
    var email = $("#Remail").val();
    var nombre = $("#nombre").val();
    var pass = $("#Rcontrasena").val();
    var genero = obtenerRadioButton(document.getElementsByName("genero"));
    var localidad = $("input[name=loc]").val();
    var provincia = $("input[name=prov]").val();
    var fecha = $("#fecha").val();
    var informacion = obtenerCheckbox(document.getElementsByName("informacion"));
            
    var data = "email="+email+"&nombre="+nombre+"&pass="+pass+"&genero="+genero+"&localidad="+localidad+"&provincia="+provincia+"&fecha="+fecha+"&informacion="+informacion;
    
    
    $.ajax({
        url:"./PHP/guardar_datos_registro.php",
        type:"POST",
        data: data,
        beforeSend: function() {
            console.log("enviando datos a DB")
        },
        success: function(resp) {
            console.log("resp");
            
            if(resp==="True"){
                location.href= "./inicio.php";
            }else{
                
                alert(resp);
            }
             
        }
    });
}

function cambioProvincia(){
      var id1 = $('input[name=prov]').val();
        $("input[name=loc]").val('');
       
        $("#localidad").load("./PHP/cambio_provincia.php", { id:id1}, function(){
     
        });
}

function obtenerRadioButton(ctrl){
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked) return ctrl[i].value;
}

function obtenerCheckbox(ctrl){
    for(i=0;i<ctrl.length;i++)
        if(ctrl[i].checked){
            return ctrl[i].value;
        }else{
        return 0;
        }
}

function autentificar(){
    
    var email = $("#email").val();
    var pass = $("#contrasena").val();
   
//    var data = "email= "+email+" &pass= "+pass;
 var data = { 

                "email" : email, 
                "pass" : pass 

        };
    
    $.ajax({
        url:"./PHP/autentificar.php",
        type:"POST",
        data: data,
//        async : true,
//        cache: false,
        beforeSend: function() {
            
            console.log("enviando datos a DB");

        },
        success: function(resp) {
            console.log("resp");
         
            if(resp==="True"){
                location.href= "./inicio.php";
            }else{
                alert("No existe usuario o contraseña");
            }
   
     
   
    }
        
                    
    });
            
    
}