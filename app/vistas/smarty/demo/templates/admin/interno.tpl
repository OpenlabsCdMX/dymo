<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Dialogo y Movimiento - Debido Proceso</title>
    <link href="../web/css/librerias/bootstrap.min.css" rel="stylesheet">
    <link href="../web/css/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
    <link href="../web/css/dashboard.css" rel="stylesheet">
    <script src="../web/js/ie-emulation-modes-warning.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      {include file="admin/menu_horizontal.tpl"}
    </nav>

    <div class="container-fluid" style="margin-top:60px;">
      
          {include file="admin/menu_izquierda.tpl"}  
        
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-350px;">
          <table cellpading="10" cellspacing="10">
              <tr><td><h1 class="page-header">Listado Internos</h1></td>
                  <!-- <td>&nbsp;&nbsp;&nbsp;agregar interno</td><td>&nbsp;&nbsp;&nbsp;<a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarInterno">
                  <img width="25" height="25" src="../web/imagenes/min/agregar.png" /></a>&nbsp;</td> -->   
              </tr>
          </table>
          
          <table cellspacing="10" cellpadding="10"  border=0; style="border-bottom:#cccccc 1px solid" width="100%">
          
              <tr><td align="center" width="20%"><h3><b>Nombre</b></h3></td> <td align=left><h3>{$dato_persona[0]['NOMBRES']}</h3></td></tr>
              <tr><td align="center" width="20%"><h3><b>Apellido</b></h3></td> <td align=left><h3>{$dato_persona[0]['APELLIDOS']}</h3></td> </tr>
              <tr><td align="center" width="20%"><h3><b>Direccion</b></h3></td><td align=left><h3>{$dato_persona[0]['DIRECCION']}</h3></td> </tr>
              <tr><td align="center" width="20%"><h3><b>Telefono</b></h3></td><td align=left><h3>{$dato_persona[0]['TELEFONO']}</h3></td> </tr>
              <tr><td align="center" width="20%"><h3><b>Celular</b></h3></td><td align=left><h3>{$dato_persona[0]['CELULAR']}</h3></td></tr>
         
       <!-- <td align="center" height="30px">
            <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Interno&num_interno={*$listado_internos[$i]['PERSONA_ID_PERSONA']*}">

        </td> -->   
              
          </table>
        </div> <!-- fin -->
      
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>