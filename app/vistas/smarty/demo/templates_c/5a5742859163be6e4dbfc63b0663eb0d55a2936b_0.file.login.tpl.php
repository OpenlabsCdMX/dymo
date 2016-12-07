<?php
/* Smarty version 3.1.29, created on 2016-01-07 23:52:07
  from "C:\xampp\htdocs\rollmarket2016\app\vistas\smarty\demo\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568eec175b7e33_28021064',
  'file_dependency' => 
  array (
    '5a5742859163be6e4dbfc63b0663eb0d55a2936b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rollmarket2016\\app\\vistas\\smarty\\demo\\templates\\login.tpl',
      1 => 1452207122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_568eec175b7e33_28021064 ($_smarty_tpl) {
?>
	
<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;position:relative;margin:auto 0; top:200px;">
<table align=center>
<form method="post" action=" http://localhost/rollmarket2016/web/index.php?controlador=Acceso">
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

</table>
<div> 
<?php }
}
