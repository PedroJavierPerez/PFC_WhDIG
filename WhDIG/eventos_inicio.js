/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    
 

 

}); 


// FUNCIONES


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






