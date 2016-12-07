<?php
/* Smarty version 3.1.29, created on 2016-02-08 13:17:32
  from "C:\xampp\htdocs\proyecto_web_historias\app\vistas\smarty\demo\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56b8875c407c29_49157617',
  'file_dependency' => 
  array (
    '7e360ac78a7d41c775ae25257f0fc98a7324d098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_web_historias\\app\\vistas\\smarty\\demo\\templates\\login.tpl',
      1 => 1454933841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56b8875c407c29_49157617 ($_smarty_tpl) {
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
