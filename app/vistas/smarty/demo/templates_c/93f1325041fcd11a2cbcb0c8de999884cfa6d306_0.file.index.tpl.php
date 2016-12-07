<?php
/* Smarty version 3.1.29, created on 2016-01-07 19:44:15
  from "C:\xampp\htdocs\rollmarket2016\app\vistas\smarty\demo\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_568eb1ff79da00_36725839',
  'file_dependency' => 
  array (
    '93f1325041fcd11a2cbcb0c8de999884cfa6d306' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rollmarket2016\\app\\vistas\\smarty\\demo\\templates\\index.tpl',
      1 => 1452192252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_568eb1ff79da00_36725839 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"rollmarket"), 0, false);
?>

<div id="contentslide" style="border:1px solid #ccc;height:300px;">
    <div class="aslider">
        <div class="aslide" data-duration="12">
            <img src="../web/imagenes/banners/baner_papeleria.png" alt="an image" />
        </div>
        <div class="aslide" data-duration="12">
            <img src="../web/imagenes/banners/baner_accdeportes.png" alt="an image" />
        </div>
        <div class="aslide" data-duration="12">
            <img src="../web/imagenes/banners/baner_termico2.png" alt="an image" />
        </div>
    </div>
</div>

<div style="width:100%;margin-top:20px;border:1px solid #ccc;background-color:#fff;">
    <div style="border:0px solid;height:50px;position:relative;margin-left:5px;top:10px;">
    <span style="font-family: Arial,sans;font-size: 24px;color: #444;">Productos mas vendidos</span>
    </div>
</div>

<div style="width:100%;margin-top:20px;border:1px solid #ccc;background-color:#fff;">

    <div style="border:0px solid;height:50px;position:relative;margin-left:5px;top:10px;">
    <span style="font-family: Arial,sans;font-size: 24px;color: #444;">Shemags - Camisetas y pantalones camuflados</span>
    </div>

    <table><tr>
    <td><a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Producto&action=index&id_prod=1118"><img src="imagenes/banners/c_cam.jpg" border="0" /></a></td>
    <td><a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Producto&action=index&id_prod=1117"><img src="imagenes/banners/c_cam2.jpg" border="0" /></a></td>
    <td><img src="imagenes/banners/mascara.jpg" border="0" /></td>
    </tr></table>

</div>

<div style="width:100%;margin-top:20px;border:1px solid #ccc;background-color:#fff;height:50px;">
    <div style="border:0px solid;height:50px;position:relative;margin-left:5px;top:10px;">
    <span style="font-family: Arial,sans;font-size: 24px;color: #444;">Los productos mas deseados en deportes y fitness</span>
    </div>
</div>

<div style="width:100%;margin-top:20px;border:1px solid #ccc;background-color:#fff;height:50px;">
    <div style="height:50px;position:relative;margin-left:5px;top:10px;">
    <span style="font-family: Arial,sans;font-size: 24px;color: #444;">Productos destacados</span>
    </div>
</div>

<div style="width:100%;margin-top:20px;border:1px solid #ccc;background-color:#fff;height:50px;">
    <div style="border:1px solid #ccc;height:50px;position:relative;margin-left:5px;top:10px;">
    <span style="font-family: Arial,sans;font-size: 24px;color: #444;">Papeleria y herramientas</span>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
