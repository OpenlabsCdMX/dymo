<?php
/* Smarty version 3.1.29, created on 2016-12-06 19:44:52
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/buscar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58476994c870a7_73752381',
  'file_dependency' => 
  array (
    'b0dd38c56aab8e8d3592219c44f853cb5a033fbf' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/buscar.tpl',
      1 => 1481074991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58476994c870a7_73752381 ($_smarty_tpl) {
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
    
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/bootstrap-modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/funciones.js"><?php echo '</script'; ?>
>
</head>
<body>  
        <div id='clientes'>
             
             <ul id='lista' style="margin-top:30px;">
                 <li>
                     <a href="javascript:ocultar('<?php echo $_smarty_tpl->tpl_vars['nombre']->value[0]['APELLIDOS'];?>
','<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
');" id="interno"> 
                        <img src='../web/imagenes/min/usuarios.png'><?php echo $_smarty_tpl->tpl_vars['nombre']->value[0]['APELLIDOS'];?>

                     </a>
                     
                 </li> 
             </ul> 
        </div>
    
</div>
</div>
</body>    
</html><?php }
}
