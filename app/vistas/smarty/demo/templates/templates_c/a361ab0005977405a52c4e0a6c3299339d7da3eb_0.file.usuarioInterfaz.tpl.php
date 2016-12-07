<?php
/* Smarty version 3.1.29, created on 2016-07-13 19:53:42
  from "/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/usuarioInterfaz.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5786e2962b3ba1_58796161',
  'file_dependency' => 
  array (
    'a361ab0005977405a52c4e0a6c3299339d7da3eb' => 
    array (
      0 => '/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/usuarioInterfaz.tpl',
      1 => 1467909252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_5786e2962b3ba1_58796161 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Voz Historica"), 0, false);
?>
	

<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;position:absolute;margin:auto 0; top:10px;">
Hola, Hello, Salve, Bonjour, Guten Morgen
<div> 
    <div><b>Administrador VozHistorica.com.co</b></div>
</div>
<br>
<div>
<table><tr><td>Pagina principal</td></tr>
<tr><td>&nbsp;<a href=""><i>editar logo</i></a></td></tr>
<tr><td>&nbsp;<a href=""><i>editar frase</i></a></td></tr>
<tr><td>&nbsp;<a href=""><i>cambiar layout</i></a></td></tr>
<tr><td>&nbsp;<a href=""><i>articulo principal</i></a></td></tr>
<tr><td>&nbsp;<a href=""><i>ingresar articulo</i></a></td></tr></table>
</div>
<br>
<div>
<table><tr><td>Historia Digital</td></tr>
<tr><td>&nbsp;<a href=""><i>Ingresar articulo</i></a></td></tr></table>
</div>
<br>
<div>
<table><tr><td>Archivo</td></tr>
<tr><td>&nbsp;<a href=""><i>Secciones</i></a></td></tr>
<tr><td>&nbsp;<a href=""><i>Fondos Documentales</i></a></td></tr></table>
</div>
<br>
<div><a href="">salir</a></div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
