<?php
/* Smarty version 3.1.29, created on 2016-11-15 21:19:00
  from "/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_582bc214a7b000_16318657',
  'file_dependency' => 
  array (
    'e1efdea1f3ab07e26ec7006065db04b1ddc4ac8d' => 
    array (
      0 => '/var/www/html/proyecto_caldas/app/vistas/smarty/demo/templates/index.tpl',
      1 => 1479262663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582bc214a7b000_16318657 ($_smarty_tpl) {
?>
    <body>
        <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
       <!-- <h3 class="text-muted">Ojos en el Cielo, Pies en la Tierra</h3> -->
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="http://localhost/proyecto_caldas/web/index.php">Inicio</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=ViajesCaldas">Los viajes de Caldas</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=LibrosInstrumentos">Libros e Instrumentos</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=Biblioteca">La Biblioteca de Caldas</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=Astronomia">Caldas y la Astronomía</a></li>
            <li><a href="http://localhost/proyecto_caldas/web/index.php?controlador=VidaObra">Vida y Obra</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Ojos en el cielo, pies en la tierra. </h1>
        <p class="lead">Libros e instrumentos en la carrera del geógrafo Francisco José de Caldas, 1795-1816.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Seis acontecimientos estelares en la vida de Caldas</h2>
          <p>Durante su carrera, Caldas produjo una serie de acontecimientos científicos que hoy hacen parte del patrimonio colombiano. Importa reconstruirlos porque fueron producidos para contribuir al desarrollo de la cartografía y los incipientes estudios geográficos.</p>
          <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Caldas y el Observatorio Astronómico</h2>
          <p>A la llegada de Caldas a Santafé en 1805, se produjo una confluencia de materiales científicos. Allí encontró a su disposición unas colecciones constituidas por voluntad de Mutis y dotadas de una historia particular; cada pieza había sido seleccionada con criterios precisos.</p>
          <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Libros e instrumentos</h2>
          <p>Libros e instrumentos le fueron entregados a Caldas en condiciones específicas y con objetivos particulares. La conversión de la actividad científica de Caldas de privada en pública plantea varios interrogantes. Su carrera como geógrafo se despliega en tres periodos.</p>
          <p><a class="btn btn-primary" href="#" role="button">Ver detalles &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
