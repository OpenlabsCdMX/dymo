<?php
/* Smarty version 3.1.29, created on 2016-09-14 17:31:51
  from "/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/indexbk.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57d9cfd79f0d87_91826386',
  'file_dependency' => 
  array (
    '5aad4944ea1a6d3bba8e5b6a473e226406b0a8e8' => 
    array (
      0 => '/var/www/html/proyecto_web_historias/app/vistas/smarty/demo/templates/indexbk.tpl',
      1 => 1473892308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d9cfd79f0d87_91826386 ($_smarty_tpl) {
?>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Voz Hist&#243;rica</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Memoria</a></li>
                        <li><a href="#about">Investigaci&#243;n</a></li>
                        <li><a href="#contact">Historia Digital</a></li>
                        <li><a href="#contact">Geo Historia</a></li>
                        <li><a href="#contact">Historia de Colombia</a></li>
                        <li><form class="navbar-form navbar-left" role="search">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Buscar">
                              </div>
                              <button type="submit" class="btn btn-default">enviar</button>
                            </form>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container-fluid" style="border:0px solid;">
            <div style="border:0px solid; height:200px" class="starter-template">
                <img style="margin-top: -30px" border="0" src="../web/imagenes/min/logo.png" />
                <br><span style="font-size:12px;"><b><?php echo $_smarty_tpl->tpl_vars['diasem']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</b></span> <br>
                <p class="lead" style="margin-top: 5px; line-height:1" >  
                <span style="font-size:14px;">"La injusticia social necesita ser denunciada y combatida.
                <br>El mundo no se va a arreglar por s&#237; solo"</span> <span style="font-size:12px;"><i>Eric Hobsbawm</i></span>
                </p>
            </div> <br>              
            <!-- primera fila -->           
            <div class="row" style="border:0px solid; margin-top:-30px;">
                <div class="col-lg-9 table-responsive">
                    <div class="row">
                        <div class="col-lg-4">
                          <h3>Actualidad</h3>
                          <img class="img-thumbnail img-responsive" style="margin-top:10px;" src="../web/imagenes/min/pazhabana.jpg">
                          <p>Sobre el proceso de paz y la historia del conflicto armado en Colombia. </p>
                        </div>
                        <div class="col-lg-4">
                          <h3>Hoy es historia</h3>
                          <img class="img-thumbnail img-responsive" style="margin-top:10px;" src="../web/imagenes/min/historiacol/sigloXX/policia_regeneracion.jpg">
                          <p>La Polic&#237;a Nacional en La regeneraci&#243;n. Bogot&#225; 1901-1903. </p>
                       </div>
                        <div class="col-lg-4">
                          <h3>Opini&#243;n</h3>
                          <img  class="img-thumbnail img-responsive" style="margin-top:10px;" src="../web/imagenes/min/muisca.jpg">
                          <p>Colombia pre hisp&#225;nica:Un fragmento de la vida en la Bacat&#225; del siglo XV .</p>

                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="row" style=" background-image: url('../web/imagenes/bk_mapa.jpg')">
                        
                        <div class="col-lg-6 list-group" style=" opacity: 0.7;
    filter: alpha(opacity=30); ">
                            <div  class="list-group-item">
                              <h2>Historia Digital de Colombia</h2>
                              <span style="font-size:16px;line-height:1.3em"><i>"Pueblo de Colombia aprende de tu historia, no pierdas, no vendas tu memoria"<br></i></span>
                        
                            </div>
                            
                            <div class="list-group-item ">
                              <h4 class="list-group-item-heading">Periodo Prehisp&#225;nico 1000 - 1492</h4>
                              <p class="list-group-item-text">Antes de la llegada de los espa&ntilde;oles, exist&#237;an diversas comunidades
                                  ind&#237;genas que poblaban el terriotorio actual. La vida en sociedad hab&#237;a tomado otro camino diferente al europeo.</p>
                            </div>
                            <a href="#" class="list-group-item">
                              <h4 class="list-group-item-heading">Descubrimiento y Conquista 1492 - 1550</h4>
                              <p class="list-group-item-text">En la madrugada del 12 de octubre de 1492 nativos de las islas Guanahani vieron deslumbrados seres que se acercaban
                               a sus playas.</p></a>
                            <a href="#" class="list-group-item ">
                              <h4 class="list-group-item-heading">Colonia 1550 - 1770</h4>
                              <p class="list-group-item-text">La vida colonial en el Nuevo Reino de Granada transcurri&#243; bajo la tutela de la Iglesia 
                              que educaba y ejerc&#237;a control social.</p>
                            </a>
                           <a href="#" class="list-group-item ">
                              <h4 class="list-group-item-heading">Revoluci&#243;n e independencia 1770-1819</h4>
                              <p class="list-group-item-text">Una nueva generaci&#243;n asume la transici&#243;n entre la lealtad al rey y
                              el nacimiento de una nueva rep&#250;blica.</p></a>
                            <a href="#" class="list-group-item ">
                              <h4 class="list-group-item-heading">Construcci&#243;n de la Naci&#243;n 1819 - 1900</h4>
                              <p class="list-group-item-text">A partir de la independencia el objetivo era construir una nueva rep&#250;blica. El sue&ntilde;o de la Grancolombia
                                  terminar&#225; con la muerte de Bol&#237;var y a&#250;n as&#237; la tarea estaba lejos de ser cumplida.</p> </a>
                            <a href="#" class="list-group-item">
                              <h4 class="list-group-item-heading">Siglo XX Colombia en el panorama Mundial</h4>
                              <p class="list-group-item-text">La bonanza cafetera inserta a Colombia en la econom&#237;a mundial. El narcotr&#225;fico sostiene una contabilidad subterranea. El neoliberalismo implementa sus pol&#237;ticas. 
                              La guerra interna polariza al pa&#237;s.</p>
                              </a>
                            <a href="#" class="list-group-item ">
                              <h4 class="list-group-item-heading">Actualidad Siglo XXI</h4>
                              <p class="list-group-item-text">Un nuevo siglo tiene como caracter&#237;stica la reelecci&#243;n presidencial y el acuerdo de paz entre el gobierno y la guerrilla de las FARC-EP.</p>
                            </a>
                          </div>
                        
                        
                      <div class="col-lg-3 list-group hidden-xs" style="width:490px;">
                           <!-- <div  class="list-group-item" style="background-color: background">
                              <h2></h2>
                              <span style="font-size:16px;line-height:1.3em"><i><br><br><br><br></i></span>
                           </div>                        
                           <div class="list-group-item">
                               <img width="60" height="50" style="margin-top:10px;" src="../web/imagenes/min/historiacol/indigena/indigena1.jpg">
                              <img width="60" height="50" style="margin-top:10px;" src="../web/imagenes/min/cultura_precolombina.jpg">
                            </div>
                            -->
                        </div> 
                        
                        
                    </div>
                </div>
                <div class="col-xs-3 col-sm-3 hidden-md hidden-xs"><br>
                    <div><span style="font-size:24px;"><b>Noticias del pasado</b></span>
                            <p><br>
                            "<b>1782</b> El 1 de febrero arcabucearon a Gal&#225;n y a sus tres companeros, Molina, Alcantuz y Ortiz, y sacaron
                        a la verguenza a 17 de los que le segu&#237;an, y despu&#233;s los pusieron en un tablado para que vieran ejecutar justicia. Pusieron cuatro banquillos 
                        frente a la c&#225;rcel grande, donde los arcabucearon; despues los colgaron en dos horcas que se hab&#237;an puesto para este fin, pues la causa
                        de arcabucearlos no fue sino porque el verdugo no estaba diestro, pero, la sentencia fue que fueran ahorcados. A Gal&#225;n
                        le descuartizaron la cabeza, que fue a Guaduas; un brazo al Socorro, el otro a San Gil, una pierna a Mogotes y la otra al Puente Real. (...)
                        A los que sacaron a verguenza despu&#233;s los echaron a los presidios de &#193;frica" (Caballero Santa Mar&#237;a, <i>Particularidades de Santaf&#233;</i>, p. 34)
                       </p>
                       <table class="table" cellpadding="5" cellspacing="5">
                            <tr><td align="right"><span style="font-size:12px;"><i>Retrato de Jos&#233; Antonio Gal&#225;n, por Domingo Moreno Otero</i></td>
                            <td><img width="70px" height="80px"  src="../web/imagenes/min/historiacol/independencia/joseantoniogalan.jpg"></td></tr>
                       </table>
                       </div>
                    
                  <div> <b>1801 Enero 20, Popayán</b><br>
"Mi amado don Santiago: 
(...)Desde que estuve allá vi entre los libros de Nari&ntilde;o el tratado de <i>Jardines
y Huertas,</i> de M. de la Quintinie, en dos tomos 4, en francés, de cuyo mérito no tiene que dudar. He persuadido a don Manuel María Arboleda que
lo tome, y libre a favor de usted el dinero necesario a cargo de don Manuel
Joseph Hurtado. Yo me intereso que usted se tome el trabajo de recibir el dinero, 
lo compre, y si aún Tanquito está allí, entregárselo para que me lo remita; 
si no, usted se encargará .de ello. La botánica me ocupa todo, y haría
algunos progresos si tuviera la FiLosofía Botánica de Linneo.
¿Es posible que en toda la extensión de la Nueva Granada no haya un
ejemplar de este libro clásico? Si Mutis no lo posee, dudo que lo haya; pero
usted haga sus esfuerzos por él. (...)" Caldas. <br><br>(ver en Cartas a Caldas, <i>Academia Colombiana de Ciencias Exactas, Físicas y Naturales</i>,Bogotá, 1978, p.55.) </div>
                    <hr class="featurette-divider">
                       
                </div> 
            </div>
              
           
            <hr class="featurette-divider">
            <h2>Historia Digital de Colombia</h2><br>
            
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-3">
                    <img class="img-circle" src="../web/imagenes/b/incendio_rublas.jpg" alt="Incendio en las Galerias" width="140" height="140">
                    <h3>Incendio en las galerias</h3>
                    <p>En el costado occidental de la Plaza de Bolívar, se ubicaban las antiguas "Galerías Arrubla". 
                        Posterior al incendio de 1900 se construyó el edificio Liévano que en la actualidad es la sede de la alcaldía capitalina.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="../web/imagenes/b/gaitan.jpg" alt="Mataron a Gaitán" width="140" height="140">
                    <h3>El caudillo del pueblo</h3>
                    <p>Mataron a Gaitán!!. Y en poco tiempo Bogotá fue un caos. El cuerpo del presunto agresor es arrastrado desnudo hacia la plaza principal.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="../web/imagenes/b/camilo.jpg" alt="Qui&#233;n fue Camilo Torres" width="140" height="140">
                    <h3>Qui&#233;n fue Camilo Torres</h3>
                    <p>Camilo el cura guerrillero. Fundador de la carrera de sociología en la Universidad Nacional de Colombia. Militante del ELN, calló en combate en 1966.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="../web/imagenes/b/paro_civico.jpg" alt="El Paro Civico Nacional" width="140" height="140">
                    <h3>El Paro Cívico Nacional</h3>
                    <p>El Paro Cívico Nacional del 14 de septiembre de 1977, representa el estallido popular y el inconformismo del pueblo frente a sus dirigentes.</p>
                    <p><a class="btn btn-default" href="#" role="button">Ver detalles &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <hr class="featurette-divider">
             <h2>Solo Historia </h2>
             
            <div class="row fe aturette">
                <div class="col-md-5">
                    
                    
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide img-thumbnail img-responsive" src="../web/imagenes/b/alcaldia_1887.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide img-thumbnail img-responsive"  src="../web/imagenes/b/plaza1880.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide img-thumbnail img-responsive" src="../web/imagenes/b/plaza2016.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption"></div>
          </div>
        </div>
      </div>
      
    </div><!-- /.carousel -->

                    
                 <!--   <img class="img-thumbnail img-responsive" width="500px" height="400px" src="../web/imagenes/b/alcaldia_1887.jpg" alt="voz historica" />
                  <!--<br><br>
                     <i>Desde sus primeros años hasta nuestros días. La plaza de Bolívar, mantiene,<br> el eco de independencia 
                        cuando nos enseñan que a raíz de un florero, criollos<br> y chapetones terminaron 
                       con su alianza y que ese mismo día salimos <br> a la plaza a gritar “independencia”.<br>
                     </i> -->
                </div>
                <div class="col-md-2 hidden-xs">
                    <div style="border:0px solid;border-right:0px solid #ccc;line-height:1.3em;margin-left:-30px;
                         height:490px; background-color:#fff;color:#000;
                         text-align:left;width:230px;padding:0px 0px 10px 10px;font-size:14px;">
                           <p><span style=" line-height:1.3em;font-size: 20px; font-family:  serif; font-weight: bold">Del Cabildo al <br>Palacio Liévano</span><br>
                               <br>En el tránsito de la ciudad colonial a la ciudad moderna la Plaza de Bolívar como comúnmente se conoce, 
                               alberga parte de la historia de Bogotá desde sus primeros años hasta nuestros días. Su espacialidad es 
                               configurada por distintos poderes, Iglesia, presidencia, alcaldía y el palacio de justica, comparten
                               su espacio como símbolo de las institucionalidad colombiana. <br><br>
                               
                               La plaza de Bolívar constituye un lugar de memoria que mantiene como hito fundacional nuestra
independencia. Construyendo en el imaginario colectivo la idea de la plaza como el
lugar para manifestar el inconformismo social reclamando democracia, libertad y un mejor
gobierno. 
                           </p>
                    </div>
                </div>
                <div class="col-md-2 hidden-xs">
                    <div style="border-left:1px solid #ccc;line-height:1.3em;
                         height:490px; background-color:#fff;color:#000;
                    text-align:left;width:230px;padding:0px 10px 10px 10px; margin-left:-20px;
                           font-size:14px;">
                        <p> Este imaginario se proyecta en otras zonas del país, pues, la plaza fue un elemento
clave y común en la ciudad española. De esta manera desde sus primeros años hasta nuestros días, la plaza de Bolívar mantiene el eco de independencia 
                        cuando nos enseñan que a raíz de un florero, criollos y chapetones terminaron 
                       con su alianza y que ese mismo día salimos a la plaza a gritar “independencia”.
                       </p><p>
                      Veremos que la zona occidental de la
                               plaza de Bolívar narra la historia de la alcaldía capitalina y que en sus cimientos se acomulan 
                               tres siglos de vivencias, incendios, independencias y lucha de poderes.        
                          <br></p>
                    </div>
                </div>
                <hr class="featurette-divider hidden-lg">
                <div class="col-md-3" style="border-left:1px solid #ccc; margin-top:0px">
                   <div><span style="font-size:24px;"><b>Opini&#243;n</b></span></div>
                   <div style="font-family:'Century Gothic', CenturyGothic, AppleGothic, sans-serif;
                                line-height:1.2em;margin: 0 auto;width:100%;border:0px solid #ccc;text-align:center;padding-bottom:5px;padding-top:0px;">
                        <br><table border=0 width="80%" cellpadding="2" cellspacing="2" align=center><tr>
                       <!-- <td width="50%" align="center"><img class="img-thumbnail" src="../web/imagenes/min/jnieto.jpg"></td> -->
                        <td align="right"><br>
                        <span style="font-size:16px;"><i>Historia y Literatura: entre la ficci&#243n y la "verdad"?</i></td>
                        </tr>
                        </table>
                   </div><br>
                   <hr class="featurette-divider"><br>
                   <div>
                       <span style="font-size:24px;"><b>Archivo Digital</b></span>
                       <p><a href="">Pensamiento Libertario</a><br><a href="">Prensa</a><br>
                       <a href="">Senderos Digitales</a></p></div>              
                </div>
            </div>
           
            
            <div class="page-header text-center">
                <h2><i>Dorm&#237;a y so&#241;&#233; que la vida era belleza, despert&#233;, y advert&#237; que ella es deber</i> <small>(I.Kant)</small></h2>
            </div>
     
            <footer>
              <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                    <h5>Memoria</h5>
                    <ul class="list-unstyled">
                                <li><a href="">conflicto armado</a></li>
                                <li><a href="">historia barrial</a></li>
                              </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Investigaci&#243;n</h5>
                    <ul class="list-unstyled">
                      <li><a href="">cultura</a></li>
                      <li><a href="">econ&#243;mica</a></li>
                      <li><a href="">pol&#237;tica</a></li>
                    <li><a href="">ambiental</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Digital</h5>
                    <ul class="list-unstyled">
                      <li><a href="">archivo</a></li>
                      <li><a href="">herramientas</a></li>
                      <li><a href="">links de interes</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>GeoHistoria</h5>
                    <ul class="list-unstyled">
                      <li><a href="">geograf&#237;a</a></li>
                      <li><a href="">pasado geol&#243;gico</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Historia de Colombia</h5>
                    <ul class="list-unstyled">
                      <li><a href="">historiograf&#237;a</a></li>
                      <li><a href="">periodos hist&#243;ricos</a></li>
                      <li><a href="">personajes hist&#243;ricos</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Bibliograf&#237;a</h5>
                    <ul class="list-unstyled">
                      <li><a href="">referencias</a></li>
                      <li><a href="">editor</a></li>
                    </ul>
                </div>	
                </div>
              </div>
            </footer>
     
        </div><!-- /.container -->
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
