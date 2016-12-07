<?php
/* Smarty version 3.1.29, created on 2016-12-06 10:07:18
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/busqueda.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5846e2360a1558_34459102',
  'file_dependency' => 
  array (
    '3874bd3f0f0ec0e924290cfcbfab29ca954acd54' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/busqueda.tpl',
      1 => 1481040322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5846e2360a1558_34459102 ($_smarty_tpl) {
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../web/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../web/css/jquery-ui.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/bootstrap-modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/funciones.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Búsqueda del  Interno:</h3>
    </div>
    <div class="modal-body">
         <form class="expediente" id='expediente' name='busqueda' method="POST" action="javascript:;">
            <input type="text" id="buscar" class="form-control" placeholder="Buscar" required autofocus>
        </form>
     
        <div id='clientes'>
              No se encontraron Resultados !
             <ul id='lista'>
                 <li>
                     <a href='javascript:ocultar("Lauro Gonzalez");' id="interno"> 
                     <img src='../web/imagenes/min/usuarios.png'> <!-- Lauro Gonzalez --> </a>
                 </li> 
             </ul>
        </div>
    </div>
    </div>
</div>
</div>
</body>    
</html><?php }
}
