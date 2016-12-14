<?php
/* Smarty version 3.1.29, created on 2016-12-12 21:35:54
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/formulario_prueba.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584f5e8a69e701_37073401',
  'file_dependency' => 
  array (
    'a9eb045e2a998b7fd8beb6b6ad97166d6ada8dd6' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/formulario_prueba.tpl',
      1 => 1481592761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_584f5e8a69e701_37073401 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dialogo y Movimiento - Debido Proceso</title>
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
        <link rel="stylesheet" type="text/css" href="../web/css/menu.css">
        <link rel="stylesheet" href="../web/css/assets/css/ie10-viewport-bug-workaround.css" > 
        <link rel="stylesheet" href="../web/css/dashboard.css">
    </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>

    <div class="container-fluid" style="margin-top:60px">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_izquierda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    </div>
          
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px">          
    <div class="row">
        <div class="col-md-2"><img src="../web/imagenes/min/logo_dymo.png"></div>
        <div class="col-md-10">
              <h3>TARJETA INFORMATIVA PARA ENTREVISTA INICIAL CON EL INTERNO</h3>
              <h3>ASESORÍA JURÍDICA</h3>
        </div>      
    </div> 
        
    <form>             
        <div class="form-group row">
            <label for="example-email-input" class="col-xs-1 col-form-label">FECHA</label>
            <div class="col-xs-5">
            <input class="form-control" type="email" value="2016-03-19" id="example-email-input">
            </div>
            <label for="example-text-input" class="col-xs-2 col-form-label">RUTA No.</label>
            <div class="col-xs-4">
            <input class="form-control" type="text" value="23" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-search-input" class="col-xs-1 col-form-label">NOMBRE</label>
            <div class="col-xs-3">
            <input class="form-control" type="search" value="Claudia Patricia" id="example-search-input">
            </div>
            
            <label for="example-url-input" class="col-xs-1 col-form-label">LENGUA</label>
            <div class="col-xs-3">
            <input class="form-control" type="url" value="maya peninsular" id="example-url-input">
            </div>
            
            <label for="example-tel-input" class="col-xs-1 col-form-label">EDAD</label>
            <div class="col-xs-3">
            <input class="form-control" type="tel" value="33" id="example-tel-input">
            </div>   
        </div>
        
        
        <div class="form-group row">
            <label for="example-email-input" class="col-xs-2 col-form-label">No EXPEDIENTE</label>
            <div class="col-xs-3">
            <input class="form-control" type="email" value="" id="example-email-input">
            </div>
            <label for="example-text-input" class="col-xs-2 col-form-label">DELITO</label>
            <div class="col-xs-5">
            <input class="form-control" type="text" value="" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-search-input" class="col-xs-2 col-form-label">FECHA DE INGRESO</label>
            <div class="col-xs-4">
            <input class="form-control" type="search" value="2016-03-19" id="example-search-input">
            </div>
            
            <label for="example-url-input" class="col-xs-2 col-form-label">SANCIÓN IMPUESTA</label>
            <div class="col-xs-4">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>     
        </div>
        <div class="form-group row">
        <label for="example-tel-input" class="col-xs-2 col-form-label">SITUACIÓN JURÍDICA</label>
            <div class="col-xs-4">
            <input class="form-control" type="tel" value="" id="example-tel-input">
            </div> 
        <label for="example-tel-input" class="col-xs-2 col-form-label">EJECUTORIA</label>
            <div class="col-xs-4">
            <input class="form-control" type="tel" value="" id="example-tel-input">
            </div>
        </div>
        
        
        <div class="form-group row">
            <label for="example-search-input" class="col-xs-2 col-form-label">PROCESO</label>
            <div class="col-xs-4">
            <input class="form-control" type="search" value="" id="example-search-input">
            </div>
            
            <label for="example-url-input" class="col-xs-2 col-form-label">3/5 PARTES</label>
            <div class="col-xs-4">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>     
        </div>
        <div class="form-group row">
        <label for="example-tel-input" class="col-xs-2 col-form-label">TIPO DE DEFENSA</label>
           
        <label for="example-tel-input" class="col-xs-1 col-form-label">OFICIO</label>
            <div class="col-xs-1">
            <input class="form-control" type="tel" value="" id="example-tel-input">
            </div>
        <label for="example-tel-input" class="col-xs-1 col-form-label">PRIVADO</label>
            <div class="col-xs-1">
            <input class="form-control" type="tel" value="" id="example-tel-input">
            </div>
        <label for="example-tel-input" class="col-xs-2 col-form-label">NOMBRE DEFENSOR</label>
            <div class="col-xs-4">
            <input class="form-control" type="tel" value="" id="example-tel-input">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="example-search-input" class="col-xs-3 col-form-label">ESTADO ACTUAL</label>
            <div class="col-xs-9">
            <input class="form-control" type="search" value="" id="example-search-input">
            </div>
        </div>   
        
        <div class="form-group row">
            <label for="example-url-input" class="col-xs-3 col-form-label">CONDICIONES</label>
            <div class="col-xs-9">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="example-search-input" class="col-xs-12 col-form-label">(En caso de no tener datos en expediente o siempre corroborar)</label>
            
        </div>   
        
        <div class="form-group row">
            <label for="example-url-input" class="col-xs-2 col-form-label">LUGAR DE ORIGEN</label>
            
            <label for="example-url-input" class="col-xs-1 col-form-label">LOCALIDAD</label>
            <div class="col-xs-5">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>
            <label for="example-url-input" class="col-xs-1 col-form-label">MUNICIPIO</label>
            <div class="col-xs-3">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>
        </div>
        
        <div class="form-group row">
            
            
            <label for="example-url-input" class="col-xs-1 col-form-label">ESTADO</label>
            <div class="col-xs-5">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>
            <label for="example-url-input" class="col-xs-1 col-form-label">PAIS</label>
            <div class="col-xs-5">
            <input class="form-control" type="url" value="" id="example-url-input">
            </div>
        </div>
          
    </form>    
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/bootstrap-modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/funciones.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
