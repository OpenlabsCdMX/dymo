<?php
/* Smarty version 3.1.29, created on 2016-01-08 23:49:36
  from "C:\xampp\htdocs\rollmarket2016\app\vistas\smarty\demo\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56903d002117a0_63797676',
  'file_dependency' => 
  array (
    '0aabf95c3265727d062446ad945278790175cb03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rollmarket2016\\app\\vistas\\smarty\\demo\\templates\\header.tpl',
      1 => 1452265128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56903d002117a0_63797676 ($_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Rollmarket, e commerce</title>
        <meta name="description" content="rollmarket fajas" />
        <link rel="index" title="rollmarket" href="http://www.rollmarket.com.co/" />
        <link href='http://rollmarket.com.co/rollmarket/web/imagenes/s/roll.ico' rel='shortcut icon' type='image/x-icon' />
        <meta name="keywords" content="rollmarket, ventas, fajas, herramientas, ventas al por mayor, ropa, regalos" />
        <link rel="pingback" href="http://rollmarket.com.co/" />
        <style  type="text/css" media="screen">
            @import  url(../web/css/style2016.css);
        </style>

         <?php echo '<script'; ?>
 type="text/javascript">
	window.addEventListener("resize", myFunction);	

	//window.onload = function() {
		
	//};
	
	
	function myFunction(){
    		//document.getElementById("demo").innerHTML = screen.height +'-'+ window.innerWidth;;
		//document.getElementById("wrap").style.border='1px solid'; 	
		//document.getElementById("wrap").style.width =window.innerWidth;
		
		if(window.innerWidth < 700){
			document.getElementById("logo_img").style.margin='0 auto';
			
		}else if(window.innerWidth > 700){
			document.getElementById("logo_img").style.margin='20px 20px 20px 20px';		
		}
			
	}	
     <?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/aslider.js"><?php echo '</script'; ?>
>
    </head>
<body>
<div id="wrap">
    <div id="cabecera"> 
        <div id="logo_img">
            <img style="margin-top:-5px;padding-left:10px;" src="imagenes/banners/logo_rollmarket.png" />
        </div>
        <div id="iconos_menu">

        <table width=100% height=100% cellspacing="5" cellpadding="5">
            <tr>
          
            <td>
            <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Empresas&action=index" title="envios">
                        <img src="imagenes/banners/envio.png" />
                    </a>
            </td>
            <td>
             <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=ServicioEnvio&action=index" title="comprar">
                        <img src="imagenes/banners/compra.png" /></a>
            </td>
            <td>
            <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=CompraSegura&action=index" title="distribuidores">
                        <img src="imagenes/banners/negocios.png" alt="compra segura" />
                    </a>
            </td>
            </tr>
            </table>

        </div>
        <div id="buscador">
            <form name="buscar" action="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Buscar&action=index" method="post">
                <table  align=right>
                    <tr>
                        <td>
                        <input id="input_buscador" name="nom_prod" type="text"
                            onblur="if (this.value=='') { this.value='Buscar:';};"
                            onfocus="if (this.value.length) { this.value='';}"
                            value="Buscar:" widdit="on" autocomplete="off" />
                        </td>
                        <td>
                            <input id="input_icon_buscador" title="buscar" type="submit" value=""/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div align=center id="menu_horizontal">
        <div align=center style="text-align:center;">
           <a href="http://localhost/rollmarket2016/web/index.php?controlador=Categoria&action=index&id_dept=4&nombre=Ropa y Accesorios">
                Ropa y Accesorios
                </a>
                &nbsp;&nbsp;<span style="color:#ccc">|</span>&nbsp;&nbsp;                                                <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Categoria&action=index&id_dept=7&nombre=Deportes y Fitness">
                Deportes y Fitness
                </a>
                &nbsp;&nbsp;<span style="color:#ccc">|</span>&nbsp;&nbsp;                                                <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Categoria&action=index&id_dept=15&nombre=Salud y Belleza">
                Salud y Belleza
                </a>
                &nbsp;&nbsp;<span style="color:#ccc">|</span>&nbsp;&nbsp;                                                <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Categoria&action=index&id_dept=16&nombre=Papeler&iacute;a y Laminaci&oacute;n">
                Papeler&iacute;a y Laminaci&oacute;n
                </a>
                &nbsp;&nbsp;<span style="color:#ccc">|</span>&nbsp;&nbsp;                                                <a href="http://rollmarket.com.co/rollmarket/web/index.php?controlador=Categoria&action=index&id_dept=17&nombre=Imanes y Herramientas">
                Imanes y Herramientas
                </a>
                                            </div>
</div>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['lista']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['lista']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div><?php echo $_smarty_tpl->tpl_vars['lista']->value[$_smarty_tpl->tpl_vars['i']->value]['nombre'];?>
</div>
<?php }
}
}
}
