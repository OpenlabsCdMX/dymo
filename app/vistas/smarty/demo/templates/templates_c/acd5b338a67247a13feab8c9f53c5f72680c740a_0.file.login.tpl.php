<?php
/* Smarty version 3.1.29, created on 2016-07-13 19:53:33
  from "/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5786e28d96c872_67974923',
  'file_dependency' => 
  array (
    'acd5b338a67247a13feab8c9f53c5f72680c740a' => 
    array (
      0 => '/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/login.tpl',
      1 => 1467909252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5786e28d96c872_67974923 ($_smarty_tpl) {
?>
	
<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;position:relative;margin:auto 0; top:200px;">
<table align=center>
<form method="post" action=" http://localhost/proyecto_web_historias/web/index.php?controlador=Acceso">
<tr>
<td><label for="username">email:</label></td>
<td><input type="text" id="username" name="username" maxlength=�50� /></td>
</tr> 
<tr>
<td><label for="passwd">Password:</label></td> 
<td><input type="password" id="passwd" name="passwd" /></td> 
</tr>
<tr><td colspan=2><input type="submit" value="Log in" /></td></tr> 
</form>
<tr><td colspan=2><a href="http://vozhistorica.com.co/historias/web/index.php?controlador=InterfazRegistroUsuario">Registro</a></td></tr> 
</table>
<div> 
<?php }
}
