<?php
/* Smarty version 3.1.29, created on 2016-09-27 11:06:57
  from "/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/personaje.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57ea992176f7d0_84978960',
  'file_dependency' => 
  array (
    'ff0fa602d5ac2eb6304ea67675f4ab67a9985f20' => 
    array (
      0 => '/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/personaje.tpl.html',
      1 => 1473869482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_b.tpl' => 1,
    'file:personaje.tpl' => 1,
  ),
),false)) {
function content_57ea992176f7d0_84978960 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common/header_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:personaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
