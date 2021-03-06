<?php
/* Smarty version 3.1.29, created on 2016-12-08 19:54:13
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/fasePenalExpediente.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584a00b57a71d9_53682488',
  'file_dependency' => 
  array (
    'c61966818efda08006b058a3183407627c6b79c5' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/fasePenalExpediente.tpl',
      1 => 1481244849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_584a00b57a71d9_53682488 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dialogo y Movimiento - Debido Proceso</title>
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
        <link rel="stylesheet" type="text/css" href="../web/css/menu.css">
        <link rel="stylesheet" href="../web/css/assets/css/ie10-viewport-bug-workaround.css" > 
        <link rel="stylesheet" href="../web/css/dashboard.css">
    </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>

    <div class="container-fluid" style="margin-top:60px">
          <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_izquierda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="width:100%;margin-top:-50px">    
                <div id='sub-menu' style="margin-top:10px">
                    <table border="0" cellpadding="10" cellspacing="10" height="40">
                    <tr><td style="background-color: lightgrey"><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedienteFaseInicial&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">&nbsp;&nbsp;ENTREVISTA INICIAL</a>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                    <td style="background-color: lightgrey"><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedienteFaseFamiliar&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">FAMILIA</a>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                    <td style="background-color: lightgrey"><a href="http://localhost/proyecto_DYMO/web/index.php?controlador=ExpedientePenal&num_exp=<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
&id_interno=<?php echo $_smarty_tpl->tpl_vars['interno_id']->value;?>
">EXPEDIENTE PENAL</a>&nbsp;&nbsp;-&nbsp;&nbsp;</td>
                    <td style="background-color: lightgrey"><a href="">HISTORIAL PROCESO</a>&nbsp;&nbsp;</td></tr>
                    </table> <br>
                    <div class="contenido">
                        <div id="contenido1">

<div id='expedientePenal'>Fase Penal
     <form class="expedientePenal" id='expedientePenal' name='expedientePenal'>
        <h3 class="cabecera">RUTA DIMO: <?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
</h3>

         <label class='etiquetas' for="nombre_expediente">NOMBRE EXPEDIENTE</label>
         <input type="text" id="nombre_expediente" name='' class="form-control" placeholder="Nombre Expediente">

         <div style='clear:left;'></div> 

         <label class='etiquetas' for="fecha_creacion">FECHA CREACIÓN</label>
         <input type="text" id="fecha_creacion" name='fecha_creacion' class="form-control" placeholder="2016-12-05" readonly><label class='etiquetas' for="numero_penal">NO EXP PENAL</label>
         <input type="text" id="numero_penal" name='numero_penal' class="form-control" placeholder="SOLO MAYUSCULAS" required autofocus>
         <div style='clear:left;'></div>
  
        
        <label class='etiquetas' for="fecha_ingreso">FECHA INGRESO</label>
        <input type="text" id="fecha_ingreso" name='fecha_ingreso' class="form-control" placeholder="Fecha Ingreso" readonly="readonly">

        <label class='etiquetas' for="fecha_sentencia">FECHA SENTENCIA</label>
        <input type="text" id="fecha_sentencia" name='fecha_sentencia' class="form-control" placeholder="Fecha Sentencia" readonly="readonly">

        <div style='clear:left;'></div>

        <label class='etiquetas' for="fecha_ejecutoria">FECHA EJECUTORIA</label>
        <input type="text" id="fecha_ejecutoria" name='fecha_sentencia' class="form-control" placeholder="Fecha Ejecutoria" readonly="readonly">

        <label class='etiquetas' for="fuero">FUERO</label>
         <select id='fuero' name='fuero' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">COMUN</option>
               <option value="NO">FEDERAL</option>
          </select>

       <div style='clear:left;'></div>

    
       <label class='etiquetas' for="origen">ORIGEN JUZGADO</label>
       <input type="text" id="origen_juzgado" name='origen_juzgado' class="form-control" placeholder="ORIGEN JUZGADO">

        <label class='etiquetas' for="residencia_campeche">NOMBRE JUEZ</label>
        <input type="text" id="nombre_juez" name='nombre_juez' class="form-control" placeholder="Nombre Juez">

        <div style='clear:left;'></div>

        <label class='etiquetas' for="falta_meritos">FALTA MERITOS</label>
        <select id='falta_meritos' name='falta_meritos' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
          </select>


        <label class='etiquetas' for="fecha_falta">FECHA</label>
        <input type="text" id="fecha_falta" name='fecha_falta' class="form-control" placeholder="Fecha Falta Meritos">

        <label class='etiquetas' for="t_constitucion">T. CONSTITUCIÓN</label>
        <select id='t_constitucion' name='t_constitucion' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
          </select>

        <div style='clear:left;'></div>

        <label class='etiquetas' for="fecha_constitucion">FECHA T. CONSTITUCION</label>
        <input type="text" id="fecha_constitucion" name='fecha_constitucion' class="form-control" placeholder="2016-12-05 12:30" readonly>

        <label class='etiquetas' for="situacion_juridica">SITUACION JURIDICA</label>
        <select id='situacion_juridica' name='situacion_juridica' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">PRISION</option>
               <option value="NO">LIBERTAD</option>
          </select>
         <div style='clear:left;'></div>
        <label class='etiquetas' for="numero_apelacion">NO APELACION</label>
        <input type="text" id="numero_apelacion" name='numero_apelacion' class="form-control" placeholder="Número Apelación">

        <label class='etiquetas' for="numero_amparo">NO AMPARO</label>
        <input type="text" id="numero_amparo" name='numero_apelacion' class="form-control" placeholder="Número Amparo">
        <div style='clear:left;'></div>

        <label class='etiquetas' for="fecha_amparo">FECHA AMPARO</label>
        <input type="text" id="fecha_amparo" name='fecha_amparo' class="form-control" placeholder="Fecha Amparo" readonly>
      <div style='clear:left;'></div>
      <button class="btnExpediente" type="submit">Crear</button>

     </form>
</div>

                            
                            </div>
                        
                    </div>
                </div> 
        <!-- fin -->
      
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/bootstrap-modal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/librerias/jquery-ui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../web/js/funciones.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
