/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
src="http://code.jquery.com/jquery-1.11.0.min.js";
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
     

});   
