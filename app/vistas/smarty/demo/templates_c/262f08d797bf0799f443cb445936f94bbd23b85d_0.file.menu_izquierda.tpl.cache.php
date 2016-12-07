<?php
/* Smarty version 3.1.29, created on 2016-12-07 12:50:46
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_izquierda.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58485a0646f872_10193153',
  'file_dependency' => 
  array (
    '262f08d797bf0799f443cb445936f94bbd23b85d' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_izquierda.tpl',
      1 => 1481130387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58485a0646f872_10193153 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7652880758485a0646eb38_88338304';
?>
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
         
        
        <?php }
}
