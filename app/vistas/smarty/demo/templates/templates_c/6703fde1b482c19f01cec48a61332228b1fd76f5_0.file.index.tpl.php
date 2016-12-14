<?php
/* Smarty version 3.1.29, created on 2016-12-13 20:03:05
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58509a492eea69_91223761',
  'file_dependency' => 
  array (
    '6703fde1b482c19f01cec48a61332228b1fd76f5' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/index.tpl',
      1 => 1481677378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu_horizontal.tpl' => 1,
    'file:admin/menu_izquierda.tpl' => 1,
  ),
),false)) {
function content_58509a492eea69_91223761 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Dialogo y Movimiento - Debido Proceso</title>
    <link rel="stylesheet" href="../web/css/librerias/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../web/css/dashboard.css">
    
    <link href="../web/css/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 
    <link href="../web/css/dashboard.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src='../web/js/librerias/holder.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../web/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
> 
    
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/jsapi"><?php echo '</script'; ?>
> 
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
<?php echo '<script'; ?>
>
   google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(dibujarGrafico);
   function dibujarGrafico() {
     // Tabla de datos: valores y etiquetas de la gráfica
     var data = google.visualization.arrayToDataTable([
       ['Texto', 'Internos'],
       ['Español', 20.21],
       ['Maya Peninsular', 4.28],
       ['Chol', 17.26],
       ['Man', 10.25],
       ['Kajabal', 10.25]      
     ]);
     var options = {
       title: 'Lenguas'
     }
     // Dibujar el gráfico
     new google.visualization.ColumnChart( 
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('GraficoGoogleChart-ejemplo-1')
     ).draw(data, options);

     var data1 = google.visualization.arrayToDataTable([
       ['Texto', 'Internos'],
       ['Homicidio', 20.21],
       ['Lesiones', 4.28],
       ['Robo', 17.26],
       ['Secuestro', 10.25] 
     ]);
     var options = {
       title: 'Delitos'
     }

     new google.visualization.PieChart( 
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('grafico2')
     ).draw(data1, options);

   }
  <?php echo '</script'; ?>
>
    
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </nav>

    <div class="container-fluid" style="margin-top:60px;">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/menu_izquierda.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px">
          <h1 class="page-header">Estadísticas</h1>

          <div id="GraficoGoogleChart-ejemplo-1" style="width: 800px; height: 600px"></div>
          <div id="grafico2" style="width: 800px; height: 600px"></div>
          
        <!--  <table align="center"><tr><td align="center"><img src="../web/imagenes/stat1.jpg"></td></tr>
          <tr><td align="center"><img src="../web/imagenes/stat2.jpg"></td></tr></table> -->
          
          <h2 class="sub-header">INTERNOS</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Identificación</th>
                  <th>NOMBRES</th>
                  <th>APELLIDOS</th>
                  <th>EDAD</th>
                  <th>NÚMERO EXPEDIENTE</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>ALBERTO</td>
                  <td>VELEZ</td>
                  <td>34</td>
                  <td>DIMO-12</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>PEDRO</td>
                  <td>OTAÑO</td>
                  <td>36</td>
                  <td>DIMO-13</td>
                </tr>
          
              </tbody>
            </table>
          </div>
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
 src="../web/js/assets/js/vendor/holder.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../web/js/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
