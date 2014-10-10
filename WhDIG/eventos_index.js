/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//src="./Jquery/jquery-1.11.1.js";
$(document).ready(function(){
 
 //Cuando se cambia el input provincia carga los municipios de esa provincia.
    $("input[name=pro]").change(function(){
        cambioProvincia();  
    });

 //Cuando se pulsa en el input provincia se selecciona el texto.
    $("input[name=pro]").click(function(){
        $("input[name=pro]").select();
    });

 //Cuando se pulsa en el input ciudad se selecciona el texto.
    $("input[name=ciu]").click(function(){
        $("input[name=ciu]").select();
    });
    
 //Cuando se pulsa en el input tipo se selecciona el texto.
    $("input[name=tip]").click(function(){
        $("input[name=tip]").select();  
    });

 //Cuando se pulsa en el input local se selecciona el texto.
    $("input[name=loc]").click(function(){
        $("input[name=loc]").select();
    });
    
 //Lee los input de filtrado y filtra los eventos según estos.
    $("#formFiltro").submit(function(){
        opcionesFiltrado();
        return false;
    });
    
 //Obtiene el valor del imput suscribir y permite suscribir al usuario.
    $("#formSuscribir").submit(function(){ 
        suscribir();
        $("#Iemail").val("");
        return false;
    })
    
 //Obtiene el valor del imput eliminar suscribir y permite eliminar la suscripción del usuario.
    $("#formEliminarSuscribir").submit(function(){ 
        eliminarSuscribir();
        $("#NIemail").val("");
        return false;
    })

 //Obtiene la contraseña y email de usuario para validar y iniciar sesión.
    $("#formAutentificar").submit(function(){ 
   
        autentificar();
        return false;
    })
    
    
    $("#eventos a").click(function() {
 
        
        ID = $(this).attr("id");     
//        mostrarDetallesEvento();
        $("#detallesEvento").load("./PHP/cargar_detallesEvento.php", {id_evento:ID}, function(){

          
        });
        
        return false;
    })

       
    

}); 


// FUNCIONES

function mostrarDetallesEvento(){
   location.href= "./detallesEventoUNR.php";
    
    
}



function cambioProvincia(){
      var id1 = $('input[name=pro]').val();
        $("input[name=ciu]").val('');
       
        $("#ciudad").load("./PHP/cambio_provincia.php", { id:id1}, function(){
     
        });
}

function opcionesFiltrado(){
     var fechaI = $("#fechaInicio").val();
    var fechaF = $("#fechaFin").val();
    var provincia = $('input[name=pro]').val();
    var municipio = $('input[name=ciu]').val();
    var tipo = $('input[name=tip]').val();
    var local = $('input[name=loc]').val();
    
     $("#eventos").load("./PHP/filtrar_eventos.php", { fechaI:fechaI,fechaF:fechaF, provincia:provincia, municipio:municipio, tipo:tipo, local:local}, function(){

            
        });
}

function suscribir(){
    
    var email = $("#Iemail").val();
    
    var data = "email="+email;
    
    $.ajax({
        url:"./PHP/suscribir.php",
        type:"POST",
        data: data,
        beforeSend: function() {
            console.log("enviando datos a DB")
        },
        success: function(resp) {
            console.log("resp")
            
        }
    })
}

function eliminarSuscribir(){
    
    var email = $("#NIemail").val();
    
    var data = "email="+email;
    
    $.ajax({
        url:"./PHP/eliminarSuscripcion.php",
        type:"POST",
        data: data,
        beforeSend: function() {
            console.log("enviando datos a DB")
        },
        success: function(resp) {
            console.log("resp");
            
        }
    })
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
        
                    
    })
            
    
}