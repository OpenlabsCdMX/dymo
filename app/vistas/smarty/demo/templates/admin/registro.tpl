<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Registro de Interno - Dialogo y Movimiento</title>
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../web/css/librerias/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="../web/css/formulario.css">
        <link href="../web/css/dashboard.css" rel="stylesheet">

        <script src="../web/js/librerias/jquery-1.12.4.js"></script>
        <script src="../web/js/librerias/jquery-ui.js"></script>
        <script src="../web/js/funciones.js"></script>
    </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      {include file="admin/menu_horizontal.tpl"}
    </nav>

    <div class="container-fluid" style="margin-top:60px">
      
          {include file="admin/menu_izquierda.tpl"}  
       
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top:-50px;">
          <h1 class="page-header">Registro Internos</h1>
          
            <form method="POST" action="index.php?controlador=RegistroInterno" class="formulario" id="formulario">
            <h3 class="cabecera">Datos personales</h3>    
    
             
                    <label for="inputNombre" class="sr-only">Nombre</label>
                    <input type="text" name="nombrePersona" id="inputNombre" class="form-control" placeholder="Nombres" required autofocus>
                    <label for="inputApellidos" class="sr-only">Apellido</label>
                    <input type="text" name="apellidoPersona" id="inputApellidos" class="form-control" placeholder="Apellidos" required autofocus>
                
                    <label for="inputAlias" class="sr-only">Alias</label>
                    <input type="text" name="aliasInterno" id="inputAlias" class="form-control" placeholder="Alias" required autofocus>
                    <label for="inputFechaN" class="sr-only">Fecha de Nacimiento</label>
 	            <input type="text" id="inputFechaN" name="fechaNacimientoInterno" class="form-control" placeholder="Fecha Nacimiento">
                    
                    <label for="inputEdad" class="sr-only">Edad</label>
                    <input type="text" id="inputEdad" name="edadInterno" class="form-control" placeholder="Edad">
                  
                    <label for="inputSexo" class="sr-only">Sexo</label>
                    <select id='sexo'>
                    <option value='' name="sexoPersona">Sexo</option>
                    <option value='F'>F</option>
                    <option value='M'>M</option>
                    </select>
                  
                    <label for="inputDireccion" class="sr-only">Dirección</label>
                    <input name="direccionPersona" type="text" id="inputDireccion" class="form-control" placeholder="Direccion">
                    <label for="inputtelefono" class="sr-only">Telefono</label>
                    <input name="telefonoPersona" type="text" id="inputTelefono" class="form-control" placeholder="Telefono">
                
                    <label for="inputCelular" class="sr-only">Celular</label>
                    <input name="celularPersona" type="text" id="inputTelefono" class="form-control" placeholder="Celular">   
                    <label for="inputCaseta" class="sr-only">Caseta</label>
                    <input name="casetaPersona" type="text" id="inputCaseta" class="form-control" placeholder="Caseta">
                
                    <button class="btnCrear" type="submit" name="submit">Crear</button>
            </form>     
        </div> <!-- fin -->
      
     </div> 
</body>
</html>