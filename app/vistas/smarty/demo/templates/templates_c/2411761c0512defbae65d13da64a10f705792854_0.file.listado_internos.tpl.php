<?php
/* Smarty version 3.1.29, created on 2016-12-08 17:21:58
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/listado_internos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5849dd06b91fb9_76660784',
  'file_dependency' => 
  array (
    '2411761c0512defbae65d13da64a10f705792854' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/listado_internos.tpl',
      1 => 1481235711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_5849dd06b91fb9_76660784 ($_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="../web/css/dashboard.css">
    
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
              <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['num']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                            <tr>
                                <td align="center" height="30px">
                                    <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Interno&num_interno=<?php echo $_smarty_tpl->tpl_vars['listado_internos']->value[$_smarty_tpl->tpl_vars['i']->value]['PERSONA_ID_PERSONA'];?>
">
                                    <img width="25" height="25" src="../web/imagenes/min/editar.png" /></a>
                                </td>
                                
                               <!-- <td align="center"><img width="25" height="25" src="../web/imagenes/min/eliminar.png" /></td> -->
                                <td align=left><?php echo $_smarty_tpl->tpl_vars['listado_internos']->value[$_smarty_tpl->tpl_vars['i']->value]['ALIAS'];?>
</td>
                                <td align=center><?php echo $_smarty_tpl->tpl_vars['listado_internos']->value[$_smarty_tpl->tpl_vars['i']->value]['FECHA_NAC'];?>
</td>
                                <td align=center><?php echo $_smarty_tpl->tpl_vars['listado_internos']->value[$_smarty_tpl->tpl_vars['i']->value]['EDAD'];?>
</td>
                                
                            </tr>    
                <?php }
}
?>

          </table>
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
