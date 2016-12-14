<?php
/* Smarty version 3.1.29, created on 2016-12-12 22:22:04
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/faseFamiliarExpediente.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584f695c699b65_93985011',
  'file_dependency' => 
  array (
    'e88c8320ad2fd129bd469f512eb35c948e6cfa61' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/faseFamiliarExpediente.tpl',
      1 => 1481599260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_584f695c699b65_93985011 ($_smarty_tpl) {
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
                <div class="form-group row">
                <label for="" class="col-xs-3 col-form-label">
                    <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedienteFaseInicial&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">ENTREVISTA INICIAL</a>
                </label>
                <label for="" class="col-xs-3 col-form-label">
                    <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedienteFaseFamiliar&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">FAMILIA</a>
                </label>
                <label for="" class="col-xs-3 col-form-label">
                    <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedientePenal&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">EXPEDIENTE PENAL</a>
                </label>
                <label for="" class="col-xs-3 col-form-label">
                    <a href="">HISTORIAL PROCESO</a>
                </label>         
                </div>    

        <div class="row" style="margin-top: -50px">
            <div class="col-md-2"><img src="../web/imagenes/min/logo_dymo.png"></div>
            <div class="col-md-10">
                  <h3>TARJETA INFORMATIVA PARA ENTREVISTA INICIAL CON LA FAMILIA</h3>
                  <h3>ASESORÍA JURÍDICA</h3>
            </div>      
        </div>            
        <br>                             
        <form>             
            <div class="form-group row">
                <label for="example-email-input" class="col-xs-1 col-form-label">FECHA</label>
                <div class="col-xs-5">
                <input class="form-control" type="email" value="2016-03-19" id="example-email-input">
                </div>
                <label for="example-text-input" class="col-xs-2 col-form-label">RUTA No.</label>
                <div class="col-xs-4">
                <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
" id="example-text-input">
                </div>
            </div>
            
            <div class="form-group row">
            <label for="residente-input" class="col-xs-2 col-form-label">NOMBRE FAMILIARES</label>
                <div class="col-xs-4">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div> 
            <label for="example-tel-input" class="col-xs-2 col-form-label">RELACIÓN</label>
                <div class="col-xs-4">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div>
            </div>  
                
            <div class="form-group row">
                 <label for="observaciones-input" class="col-xs-2 col-form-label">DIRECCIÓN</label>
                <div class="col-xs-10">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div>   
            </div>    
                
            <div class="form-group row">

            <label for="example-tel-input" class="col-xs-1 col-form-label">TELÉFONO FIJO</label>
                <div class="col-xs-3">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div>
            <label for="example-tel-input" class="col-xs-1 col-form-label">CASETA TELEFÓNICA</label>
                <div class="col-xs-3">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div>
            <label for="example-tel-input" class="col-xs-1 col-form-label">TELÉFONO CELULAR</label>
                <div class="col-xs-3">
                <input class="form-control" type="tel" value="" id="example-tel-input">
                </div>
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
                <label for="estado-input" class="col-xs-1 col-form-label">ESTADO</label>
                <div class="col-xs-5">
                <input class="form-control" type="url" value="" id="example-url-input">
                </div>
                <label for="pais-input" class="col-xs-1 col-form-label">PAIS</label>
                <div class="col-xs-5">
                <input class="form-control" type="url" value="" id="example-url-input">
                </div>
            </div>    
                
            <div class="form-group row">
            <label for="observaciones-input" class="col-xs-4 col-form-label">OBSERVACIONES/COMENTARIOS DEL FAMILIAR</label>
            <div class="col-xs-8">
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
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
