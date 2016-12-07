<?php
/* Smarty version 3.1.29, created on 2016-12-07 12:50:46
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_horizontal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58485a0646c372_75917023',
  'file_dependency' => 
  array (
    '52cf4394384b40055b3a5b42f3958a0c6869476b' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/menu_horizontal.tpl',
      1 => 1481128855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58485a0646c372_75917023 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '214032899358485a0646b395_60583261';
?>
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
          
      </div>        <?php }
}
