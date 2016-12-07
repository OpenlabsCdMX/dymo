<?php
/* Smarty version 3.1.29, created on 2016-10-05 18:13:16
  from "/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/archivo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57f5890c470fe8_12081719',
  'file_dependency' => 
  array (
    'c9b47a6d2c2a1eba138f57976921ae3c444e17af' => 
    array (
      0 => '/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/archivo.tpl',
      1 => 1475709179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f5890c470fe8_12081719 ($_smarty_tpl) {
?>
<body>
    <div class="container">
      <!-- Static navbar -->
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header"> 
            <a class="navbar-brand" href="#"><img style="margin-top: -10px;" border="0" src="../web/imagenes/min/logo.jpg" /></a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Memoria<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Historia Barrial</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Investigaci&#243;n</a></li>
              <li><a href="#">Historia Digital</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Geohistoria <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Herramientas</a></li>
                  <li><a href="#">Links de Interes</a></li>
                </ul>
              </li>
           
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Historia de Colombia<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Periodo Prehipanico</a></li>
                  <li><a href="#">Descubrimiento y Conquista</a></li>
                  <li><a href="#">Colonia</a></li>
                  <li><a href="#">Independencia</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Construyendo la Naci&#243;n</li>
                  <li><a href="#">Siglo XIX (1819 - 1900)</a></li>
                  <li><a href="#">Siglo XX  (1900 - 2000)</a></li>
                </ul>
              </li>
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
      <div style="margin-top: 50px;"> 
        <h2>Archivo Digital</h2>
        <p>"El regreso del archivo, a veces es dificil: al placer fisico de la huella encontrada <br>
            sucede la duda mezclada con la impotencia de no saber que hacer con ella"<br>(Farge, Arlette, <i>La atraccion por el archivo</i>.)</p>
        
         <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Pensamiento Libertario en Colombia</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Senderos Digitales U. Nacional</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Revista Alternativa</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
        </div>
        
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
</html><?php }
}
