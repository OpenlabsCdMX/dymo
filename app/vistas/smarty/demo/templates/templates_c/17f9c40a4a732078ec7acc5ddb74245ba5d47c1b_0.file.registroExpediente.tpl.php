<?php
/* Smarty version 3.1.29, created on 2016-12-07 12:07:30
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/registroExpediente.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584841d2eac399_41702212',
  'file_dependency' => 
  array (
    '17f9c40a4a732078ec7acc5ddb74245ba5d47c1b' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/registroExpediente.tpl',
      1 => 1481130267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_584841d2eac399_41702212 ($_smarty_tpl) {
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Expediente Dymo - Dialogo y Movimiento</title>
  <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
  <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
  
  <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/bootstrap-modal.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/librerias/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/funciones.js"><?php echo '</script'; ?>
>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>

    <div class="container-fluid" style="margin-top:60px">
     
        
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_izquierda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-270px;">
            <h1 class="page-header">Registro Expediente</h1>
            <form method="POST" action="index.php?controlador=RegistroExpediente" style="height:200px;" class="expediente" id='expediente' name='expediente'>
                <h3 class="cabecera">Datos del expediente  (Ruta DIMO)</h3>
                <label class='etiquetas' for="num_ruta">Num Ruta</label>
                <input type="text" id="num_ruta" name="num_ruta_dymo" class="form-control" placeholder="Numero de Ruta" required autofocus>
                <label class='etiquetas' for="buscar_cliente">Interno</label>
              
                <input style="width:150px;" type="text" id="buscar_cliente" name='buscar_cliente' class="form-control" placeholder="Buscar Cliente" readonly>
                <div style="display:none"><input type="text" name="id_interno" id="id_int"></div>
              <button class="btnCrear" type="submit">Crear</button>
            </form>

            <div class="my-modal-base">
                <div class="my-modal-cont"></div>
            </div>
               
        </div> <!-- fin -->
     
     </div> 
</body>
</html><?php }
}
