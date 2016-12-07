<script type="text/javascript" src='../web/js/funciones.js'></script>

<div id='expedientePenal'>Fase Penal
     <form class="expedientePenal" id='expedientePenal' name='expedientePenal'>
        <h3 class="cabecera">RUTA DIMO:</h3>

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

 <div class="my-modal-base">
    <div class="my-modal-cont"></div>
</div>

