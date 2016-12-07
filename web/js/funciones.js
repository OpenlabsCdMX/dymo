$(document).ready(function() {
  //$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
  $("#inputFechaN").datepicker({ dateFormat: 'yy-mm-dd' });
  $("#buscar_cliente").click(function(){
    var url = "../app/vistas/smarty/demo/templates/admin/busqueda.html";
    $('.my-modal-cont').load(url,function(result){$('#myModal').modal({show:true});});
  }); 
  $('#buscar').on('keypress', function (e) {
         if(e.which == 13){
             $("#clientes").load("http://localhost/proyecto_DYMO/web/index.php?controlador=BuscarInterno&nombre="+$("#buscar").val());
         }
   });

//NUEVO CON EXPEDIENTES

  $("#sub-opcion1").click(function(){
     limpiarMenu(); 
     location.reload(); 
     $("#contenido1").load('../app/vistas/smarty/demo/templates/admin/faseinicial.tpl');
     $("#sub-opcion1").css("background-color","#FFDA91");
     
  });

  $("#sub-opcion2").click(function() {
     limpiarMenu();
     $("#contenido2").load('../app/vistas/smarty/demo/templates/admin/fasefamilia.tpl');
     $("#sub-opcion2").css("background-color","#FFDA91");
  });

  $("#sub-opcion3").click(function() {
     limpiarMenu();
     $("#contenido3").load('../app/vistas/smarty/demo/templates/admin/fasepenal.tpl');
     $("#sub-opcion3").css("background-color","#FFDA91");
  });

  $("#sub-opcion4").click(function() {
     limpiarMenu();
     $("#contenido4").load('../app/vistas/smarty/demo/templates/admin/historialpenal.tpl');
     $("#sub-opcion4").css("background-color","#FFDA91");

  });


  //FAMILIAR
    $("#buscar_familia").click(function() {
               var url = "../app/vistas/smarty/demo/templates/admin/buscarFamilia.html";
          $('.my-modal-cont').load(url,function(result){
                    $('#myModal').modal({show:true});
               });
    });

    $('#buscarFamilia').on('keypress', function (e) {
         if(e.which == 13){
             $("#familia").load("buscarfamilia.php");
         }
   });


    //EXPEDIENTE PENAL
    $("#fecha_ingreso").datepicker({dateFormat: 'yy-mm-dd'});
    $("#fecha_sentencia").datepicker({dateFormat: 'yy-mm-dd'});
    $("#fecha_ejecutoria").datepicker({dateFormat: 'yy-mm-dd'});
    $("#fecha_falta").datepicker({dateFormat: 'yy-mm-dd'});
    $("#fecha_amparo").datepicker({dateFormat: 'yy-mm-dd'});
 
 



});



function ocultar(nombre,id){
    document.expediente.buscar_cliente.value = nombre;
    document.expediente.id_int.value = id;
    $('#myModal').modal("toggle");
}

function limpiarMenu(){
   $("#sub-opcion1").css("background-color","#EEEEEE");
   $("#sub-opcion2").css("background-color","#EEEEEE");
   $("#sub-opcion3").css("background-color","#EEEEEE");
   $("#sub-opcion4").css("background-color","#EEEEEE");
   $("#contenido1").empty();
   $("#contenido2").empty();
   $("#contenido3").empty();
   $("#contenido4").empty();
}