/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
src="./Jquery/jquery-1.11.1.js";
$(document).ready(function(){
 
 
 $("input[name=pro]").change(function(){
     
        var id1 = $('input[name=pro]').val();
        $("input[name=ciu]").val('');
       



        $("#ciudad").load("./PHP/cambio_provincia.php", { id:id1}, function(){
 
            
        });
       
 
});

$("input[name=pro]").click(function(){
    $("input[name=pro]").select();
    
});

$("input[name=ciu]").click(function(){
    $("input[name=ciu]").select();
    
});
    
$("input[name=tip]").click(function(){
    $("input[name=tip]").select();
    
});

$("input[name=loc]").click(function(){
    $("input[name=loc]").select();
    
});

   $("#formFiltro").submit(function(){
    var fechaI = $("#fechaInicio").val();
    var fechaF = $("#fechaFin").val();
    var provincia = $('input[name=pro]').val();
    var municipio = $('input[name=ciu]').val();
    var tipo = $('input[name=tip]').val();
    var local = $('input[name=loc]').val();
    
     $("#eventos").load("./PHP/filtrar_eventos.php", { fechaI:fechaI,fechaF:fechaF, provincia:provincia, municipio:municipio, tipo:tipo, local:local}, function(){
// alert("fechaI:"+fechaI+"fechaF:"+fechaF+"provincia:"+provincia+"municipio"+municipio+"tipo"+tipo+"local"+local);
            
        });
        return false;
}); 

$("#formSuscribir").submit(function(e){ 
    suscribir();
    $("#Iemail").val("");
    return false;
})

});   

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