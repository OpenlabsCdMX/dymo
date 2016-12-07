<?php
/* Smarty version 3.1.29, created on 2016-01-08 00:12:09
  from "C:\xampp\htdocs\rollmarket2016\app\vistas\smarty\demo\templates\usuarioInterfaz.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568ef0c9a3d318_73990175',
  'file_dependency' => 
  array (
    'f8a66dbd96ddd2979668de2f2d40831ebb0de300' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rollmarket2016\\app\\vistas\\smarty\\demo\\templates\\usuarioInterfaz.tpl',
      1 => 1452207276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_568ef0c9a3d318_73990175 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"rollmarket"), 0, false);
?>

<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
position:absolute;margin:auto 0; top:10px;">
<h2>Rollmarket Admin</h2>
</div> 

<!--
<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;position:absolute;margin:auto 0; top:10px;">
Hola, Hello, Salve, Bonjour, Guten Morgen
</div> 

<div><h1>registrar producto</h1></div>

<div style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;position:relative;margin:auto 0; top:200px;">
<table align=center>
<form method="post" action=" http://localhost/rollmarket/web/index.php?controlador=Acceso">

<tr>
<td><label for="cat_id">Categoria</label></td> 
<td><input type="text" id="cat_id" name="cat_id" /></td> 
</tr>


<tr>
<td><label for="codigo_prod">codigo</label></td> 
<td><input type="text" id="codigo_prod" name="codigo_prod" /></td> 
</tr>


<tr>
<td><label for="username">nombre</label></td>
<td><input type="text" id="username" name="username" maxlength=�50� /></td>
</tr> 

<tr>
<td><label for="precio">precio</label></td> 
<td><input type="text" id="precio" name="precio" /></td> 
</tr>

<tr>
<td><label for="desc_prod">descripcion</label></td> 
<td><input type="desc_prod" id="desc_prod" name="desc_prod" /></td> 
</tr>
<tr><td colspan=2><input type="submit" value="Log in" /></td></tr> 
</form>

</table>
<div> 

<div><a href="">elegir imagen</a></div>
<div><a href="">subir texto</a></div>
<div><a href="">salir</a></div>
-->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
