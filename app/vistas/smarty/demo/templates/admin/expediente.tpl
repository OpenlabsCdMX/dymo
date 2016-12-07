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
      {include file="admin/menu_horizontal.tpl"}
    </nav>

    <div class="container-fluid" style="margin-top:60px;">
        {include file="admin/menu_izquierda.tpl"}  
        <div id='listaExpedientes' style='border:0px solid;'>
            <h3>Expedientes DIMO</h3>
            {for $i=0 to $num-1}
                <ul>
                    <li>
                        <a href="http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=faseExpedientes&num_exp={$listado_expedientes[$i]['NUMERO_RUTA']}">
                            Expediente DIMO No. {$listado_expedientes[$i]['NUMERO_RUTA']}<br/>    
                            <label id='fecha'>
                                Creación:{$listado_expedientes[$i]['FECHA']} - Última Modificación :
                            </label>
                        </a>
                    </li>
                </ul>
            {/for}            
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../web/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../web/js/librerias/jquery-3.1.1.min.js"></script>
    <script src="../web/js/librerias/bootstrap-modal.js"></script>
    <script src="../web/js/librerias/jquery-ui.js"></script>
    <script type="text/javascript" src="../web/js/funciones.js"></script>
  </body>
</html>