<?php
/* Smarty version 3.1.29, created on 2016-01-09 19:57:07
  from "C:\xampp\htdocs\rollmarket2016\app\vistas\smarty\demo\templates\usuarioInterfazAdmin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56915803867930_03216712',
  'file_dependency' => 
  array (
    '50ee54c25c51b901722dfc0160d47d66c58db1ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rollmarket2016\\app\\vistas\\smarty\\demo\\templates\\usuarioInterfazAdmin.tpl',
      1 => 1452365760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header_admin.tpl' => 1,
    'file:footer_admin.tpl' => 1,
  ),
),false)) {
function content_56915803867930_03216712 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"rollmarket"), 0, false);
?>

<div>
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
       <h2>RollmarketShop Admin</h2>
</div>
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
        CATALOGO ADMIN | STOREFRONT | LOGOUT
</div>
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
        <b>Edicion Departamentos </b>
</div>
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
        <table width="900px" cellspacing="5" cellpadding="5">
            <tr style="background-color:#ccc"><td width="200px">Nombre</td><td>Descripcion</td><td></td><td></td><td></td><td></td></tr> 
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['lista']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['lista']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->tpl_vars['i']->value]['descripcion'];?>
</td><td>ver categorias</td><td>editar</td><td>borrar</td></tr>
            <?php }
}
?>

        </table>
</div>
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
        <b>Agregar un nuevo departamento</b>
</div>
<form method="post" action="../app/vistas/presentacion/registrar_departamento.php">
<div style="position:relative;margin-left:20px;margin-top:20px;"> 
        <table width="700px">
            <tr><td>Nombre del departamento</td><td><input type="text" name="nomdep" /></td>
            <td>Descripcion:</td><td><input type="text" name="descripcion" /></td>
            <td><input type="submit" name="submit_add_dept" value="Adicionar" /></td></tr>
        </table>
</div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
