<html>
<head>
    <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
    <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
    
    <script type="text/javascript" src="../web/js/librerias/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../web/js/librerias/bootstrap-modal.js"></script>
    <script type="text/javascript" src="../web/js/librerias/jquery-ui.js"></script>
    <script type="text/javascript" src="../web/js/funciones.js"></script>
</head>
<body>  
        <div id='clientes'>
             
             <ul id='lista' style="margin-top:30px;">
                 <li>
                     <a href="javascript:ocultar('{$nombre[0]['APELLIDOS']}','{$interno_id}');" id="interno"> 
                        <img src='../web/imagenes/min/usuarios.png'>{$nombre[0]['APELLIDOS']}
                     </a>
                     
                 </li> 
             </ul> 
        </div>
    
</div>
</div>
</body>    
</html>