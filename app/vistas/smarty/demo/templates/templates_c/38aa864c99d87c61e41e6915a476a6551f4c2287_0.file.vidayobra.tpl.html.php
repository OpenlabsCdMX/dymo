<?php
/* Smarty version 3.1.29, created on 2016-11-15 21:19:15
  from "/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/vidayobra.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582bc223291451_89087270',
  'file_dependency' => 
  array (
    '38aa864c99d87c61e41e6915a476a6551f4c2287' => 
    array (
      0 => '/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/vidayobra.tpl.html',
      1 => 1479262564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_b.tpl' => 1,
    'file:vidayobra.tpl' => 1,
  ),
),false)) {
function content_582bc223291451_89087270 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:common/header_b.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:vidayobra.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
