<?php
/* Smarty version 3.1.29, created on 2016-01-25 17:40:19
  from "C:\xampp\htdocs\proyecto_web_historias\app\vistas\smarty\demo\templates\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a6a453baa5e2_09785848',
  'file_dependency' => 
  array (
    '74fcdd99dfc678eea319463e4f53cd0b00100043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyecto_web_historias\\app\\vistas\\smarty\\demo\\templates\\header.tpl',
      1 => 1453761496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a6a453baa5e2_09785848 ($_smarty_tpl) {
?>
<html>
        <head>
        <title></title>
        <style  type="text/css" media="screen">
            @import  url(../web/css/style_prueba.css);
        </style>
        <?php echo '<script'; ?>
 type="text/javascript">
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/aslider.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript">
	/* window.addEventListener("resize", myFunction);	

	window.onload = function() {
		
	};
	
	
	function myFunction(){
    		document.getElementById("demo").innerHTML = screen.height +'-'+ window.innerWidth;;
		//document.getElementById("wrap").style.border='0px solid'; 	
		//document.getElementById("wrap").style.width =window.innerWidth;
		
		if(window.innerWidth >= 1033){
			document.getElementById("menu_h").style.display='block';
		}else if (window.innerWidth < 1033 && window.innerWidth > 768){
			document.getElementById("titulo").style.display='none'; 
			document.getElementById("img_hist").style.width='100%';
		}else if(window.innerWidth < 768 && window.innerWidth > 700){
			
		}else if(window.innerWidth < 700){
			document.getElementById("articulo_izq").style.display='none';
			document.getElementById("articulo_der").style.display='none';
			document.getElementById("footer").style.display='none';
		}
			
	}*/	
     <?php echo '</script'; ?>
>	
    </head>
    <body>
        <div id="menu" >
            <div id="menu_h">
                <span style="color:#fff;font-size:14px;"><b>Memoria</b></span>
                <span style="color:#fff;margin-left:25px;position:relative;font-size:14px;"><b>Investigaci&#243;n</b></span>
                <span style="color:#fff;margin-left:25px;position:relative;font-size:14px;"><b>Historia Digital</b></span>
                <span style="color:#fff;margin-left:25px;position:relative;font-size:14px;"><b>Geohistoria</b></span>
                <span style="color:#fff;margin-left:25px;position:relative;font-size:14px;"><b>Historia de Colombia &nbsp;<span style="color:white;" id="demo"></span></b></span>
            </div>
        </div><?php }
}
