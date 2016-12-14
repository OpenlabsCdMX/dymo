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
    <link rel="stylesheet" type="text/css" href="../web/css/dashboard.css">
    
    <link href="../web/css/dashboard.css" rel="stylesheet">
    <script src="../web/js/ie-emulation-modes-warning.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      {include file="admin/menu_horizontal.tpl"}
    </nav>

    <div class="container-fluid" style="margin-top:60px;">
      
          {include file="admin/menu_izquierda.tpl"}  
        
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px">
          <table cellpading="10" cellspacing="10">
              <tr><td><h1 class="page-header">Listado Internos</h1></td>
                  <!-- <td>&nbsp;&nbsp;&nbsp;agregar interno</td><td>&nbsp;&nbsp;&nbsp;<a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarInterno">
                  <img width="25" height="25" src="../web/imagenes/min/agregar.png" /></a>&nbsp;</td> -->   
              </tr>
          </table>
          
          <table cellspacing="10" cellpadding="10"  border=0; style="border-bottom:#cccccc 1px solid" width="100%">
          <tr><td align="center" width="5%"></td>
              <!-- <td align="center" width="5%"></td> -->
            
              <td width="30%"><b>Alias</b></td>
              <td align="center" width="20%"><b>Fecha Nacimiento</b></td>
              <td align="center" width="20%"><b>Edad</b></td>
          </tr>
              {for $i=0 to $num-1}
                            <tr>
                                <td align="center" height="30px">
                                    <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Interno&num_interno={$listado_internos[$i]['ID_INTERNO']}">
                                    <img width="25" height="25" src="../web/imagenes/min/editar.png" /></a>
                                </td>
                                
                               <!-- <td align="center"><img width="25" height="25" src="../web/imagenes/min/eliminar.png" /></td> -->
                                <td align=left>{$listado_internos[$i]['ALIAS']}</td>
                                <td align=center>{$listado_internos[$i]['FECHA_NAC']}</td>
                                <td align=center>{$listado_internos[$i]['EDAD']}</td>
                                
                            </tr>    
                {/for}
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