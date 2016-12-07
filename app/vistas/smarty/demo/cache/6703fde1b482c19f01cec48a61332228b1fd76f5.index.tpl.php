<?php
/* Smarty version 3.1.29, created on 2016-12-07 12:50:46
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58485a06472491_85631635',
  'file_dependency' => 
  array (
    '6703fde1b482c19f01cec48a61332228b1fd76f5' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/index.tpl',
      1 => 1481136339,
      2 => 'file',
    ),
    '52cf4394384b40055b3a5b42f3958a0c6869476b' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_horizontal.tpl',
      1 => 1481128855,
      2 => 'file',
    ),
    '262f08d797bf0799f443cb445936f94bbd23b85d' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_izquierda.tpl',
      1 => 1481130387,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_58485a06472491_85631635 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Dialogo y Movimiento - Debido Proceso</title>
    <link href="../web/css/librerias/bootstrap.min.css" rel="stylesheet">
    
    <link href="../web/css/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
    <link href="../web/css/dashboard.css" rel="stylesheet">
    <script src="../web/js/ie-emulation-modes-warning.js"></script> 
  </head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/proyecto_DYMO/web/index.php">Debido Proceso</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Datos Principales</a></li>
            <li><a href="#">Expediente Penal</a></li>
            <li><a href="#">Debido Proceso</a></li>
            <li><a href="#">Seguimiento</a></li>
            <li><a href="#">Archivos</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
          
      </div>        
    </nav>

    <div class="container-fluid" style="margin-top:60px;">
        <div class="col-sm-3 col-md-2 sidebar">
    <br>
   <ul class="nav nav-sidebar">
        <!-- <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li> -->
     <li>Expediente</li>
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarExpediente">Registrar Expediente</a></li> 
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Expediente">Expedientes</a></li>
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=faseExpedientes">Ver Expedientes Ruta DYMO</a></li>
    </ul>
    
    <ul class="nav nav-sidebar">
        <li>Internos</li>
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarInterno">Registrar Internos</a></li>
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin">Ver Internos</a></li>  
        
    </ul> 
    
    <ul class="nav nav-sidebar">
        <li><a href="">Estadísticas</a></li>
        <li><a href="#">Eventos</a></li>
    </ul>  
</div>
         
        
        
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../web/js/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../web/js/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php }
}
