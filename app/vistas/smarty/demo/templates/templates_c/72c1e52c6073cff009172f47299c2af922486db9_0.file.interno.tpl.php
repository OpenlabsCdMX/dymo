<?php
/* Smarty version 3.1.29, created on 2016-12-13 23:30:48
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/interno.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5850caf8a4ef80_04269041',
  'file_dependency' => 
  array (
    '72c1e52c6073cff009172f47299c2af922486db9' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/interno.tpl',
      1 => 1481689792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_5850caf8a4ef80_04269041 ($_smarty_tpl) {
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
    <link href="../web/css/librerias/bootstrap.min.css" rel="stylesheet">
    <link href="../web/css/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
    <link href="../web/css/dashboard.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="../web/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
> 
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>

    <div class="container-fluid" style="margin-top:60px;">
      
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_izquierda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
        
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px;">
          <table cellpading="10" cellspacing="10">
              <tr><td><h1 class="page-header">Ver Interno</h1></td>
                  <!-- <td>&nbsp;&nbsp;&nbsp;agregar interno</td><td>&nbsp;&nbsp;&nbsp;<a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarInterno">
                  <img width="25" height="25" src="../web/imagenes/min/agregar.png" /></a>&nbsp;</td> -->   
              </tr>
          </table>
          
          <table cellspacing="10" cellpadding="10"  border=0; style="border-bottom:#cccccc 1px solid" width="100%">
          
              <tr><td align="left" width="20%"><h3><b>Nombre</b></h3></td> <td align=left><h3><?php echo $_smarty_tpl->tpl_vars['dato_persona']->value[0]['NOMBRES'];?>
</h3></td></tr>
              <tr><td align="left" width="20%"><h3><b>Apellido</b></h3></td> <td align=left><h3><?php echo $_smarty_tpl->tpl_vars['dato_persona']->value[0]['APELLIDOS'];?>
</h3></td> </tr>
              <tr><td align="left" width="20%"><h3><b>Alias</b></h3></td> <td align=left><h3><i><?php echo $_smarty_tpl->tpl_vars['dato_interno']->value[0]['ALIAS'];?>
</i></h3></td> </tr>
              <tr><td align="left" width="20%"><h3><b>Direccion</b></h3></td><td align=left><h3><?php echo $_smarty_tpl->tpl_vars['dato_persona']->value[0]['DIRECCION'];?>
</h3></td> </tr>
              <tr><td align="left" width="20%"><h3><b>Telefono</b></h3></td><td align=left><h3><?php echo $_smarty_tpl->tpl_vars['dato_persona']->value[0]['TELEFONO'];?>
</h3></td> </tr>
              <tr><td align="left" width="20%"><h3><b>Celular</b></h3></td><td align=left><h3><?php echo $_smarty_tpl->tpl_vars['dato_persona']->value[0]['CELULAR'];?>
</h3></td></tr>
              <tr><td align="left" width="20%"><h3><b>No. Ruta DYMO</b></h3></td><td align=left><h3><?php echo $_smarty_tpl->tpl_vars['num_exp']->value[0]['NUMERO_RUTA'];?>
</h3></td></tr>   
         </table>
         <?php if ($_smarty_tpl->tpl_vars['cantidad_exp']->value == 0) {?>
          <b>no existe expediente</b>
          <?php } else { ?>
         <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedienteFaseInicial&num_exp=<?php echo $_smarty_tpl->tpl_vars['num_exp']->value[0]['NUMERO_RUTA'];?>
&id_persona=<?php echo $_smarty_tpl->tpl_vars['id_per']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['dato_interno']->value[0]['ID_INTERNO'];?>
">ver expediente</a>
         <?php }?>
         </div> <!-- fin -->
      
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
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
