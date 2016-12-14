<?php
/* Smarty version 3.1.29, created on 2016-12-08 13:56:24
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_izquierda.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5849acd80ea801_10227990',
  'file_dependency' => 
  array (
    '262f08d797bf0799f443cb445936f94bbd23b85d' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_izquierda.tpl',
      1 => 1481223359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5849acd80ea801_10227990 ($_smarty_tpl) {
?>
<div class="col-sm-3 col-md-2 sidebar">
    <br>
   <ul class="nav nav-sidebar">
        <!-- <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li> -->
     <li>Expediente</li>
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarExpediente">Registrar Expediente</a></li> 
        <li><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Expediente">Expedientes</a></li>
        
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
         
        
        <?php }
}
