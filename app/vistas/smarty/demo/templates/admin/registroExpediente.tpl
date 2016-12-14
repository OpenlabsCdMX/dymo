<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Expediente Dymo - Dialogo y Movimiento</title>
  <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css" >
  <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
  <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
  <link href="../web/css/dashboard.css" rel="stylesheet">
  
  <script type="text/javascript" src="../web/js/librerias/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../web/js/librerias/bootstrap-modal.js"></script>
  <script type="text/javascript" src="../web/js/librerias/jquery-ui.js"></script>
  <script type="text/javascript" src="../web/js/funciones.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      {include file="admin/menu_horizontal.tpl"}
    </nav>

    <div class="container-fluid" style="margin-top:60px">
     
        
        {include file="admin/menu_izquierda.tpl"}
    </div>    
        
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px">    
          
        
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
               
         <!-- fin -->
     
     </div> 
</body>
</html>