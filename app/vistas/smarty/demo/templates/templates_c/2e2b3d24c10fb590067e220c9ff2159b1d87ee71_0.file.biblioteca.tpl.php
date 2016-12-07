<?php
/* Smarty version 3.1.29, created on 2016-11-15 21:40:01
  from "/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/biblioteca.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582bc701c54f86_27552288',
  'file_dependency' => 
  array (
    '2e2b3d24c10fb590067e220c9ff2159b1d87ee71' => 
    array (
      0 => '/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/biblioteca.tpl',
      1 => 1479263967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582bc701c54f86_27552288 ($_smarty_tpl) {
?>
<body>
    <div class="container">
      <!-- Static navbar -->
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- <div class="navbar-header"> 
            <a class="navbar-brand" href="#"><img style="margin-top: -10px;" border="0" src="../web/imagenes/min/logo.jpg" /></a>
        </div> -->
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav"> 
            <li class="active"><a href="http://localhost/proyecto_caldas/web/index.php">Inicio</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=ViajesCaldas">Los viajes de Caldas</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=LibrosInstrumentos">Libros e Instrumentos</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=Biblioteca">La Biblioteca de Caldas</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=Astronomia">Caldas y la Astronomía</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=VidaObra">Vida y Obra</a></li>
            
            </ul>
           <!-- <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul> -->
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      
      <div class="jumbotron">
        <h1>La Biblioteca de Caldas</h1>
        <p class="lead">La noción de biblioteca privada forjada por Isabelle Olivero tiene aquí una pertinencia evidente. “Entendida en sentido amplio, esto es, de los libros leídos, aunque no necesariamente de propiedad” (Olivero, 999, 11-12) de Caldas, esta noción  invita a explorar la Biblioteca del Real Seminario de San Francisco de Popayán, su colegio, y a identificar y localizar sistemáticamente los libros citados en las obras de su maestro José Félix de Restrepo (1760-1832).</p>
       <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

    </div> <!-- /container -->


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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../web/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>                  
                      
       <!-- <div style="border:1px solid #ccc;height:520px;width:1100px;margin-top:0px; text-align:center">
            
        </div> --><?php }
}
