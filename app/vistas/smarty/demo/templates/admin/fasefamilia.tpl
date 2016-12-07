<div id='expedienteFamilia'>
     <form class="expedienteFamilia" id='expedienteFamilia' name='expedienteFamilia'>
        <h3 class="cabecera">RUTA DIMO: XXXXX</h3>
         <label class='etiquetas' for="buscar_familiar">FAMILIAR DEL INTERNO</label>
         <a href='buscarFamilia.html' data-toggle="modal" data-target="#modal"><input type="text" id="buscar_familia" name='buscar_familia' class="form-control" placeholder="Buscar Familia" readonly></a><label class='etiquetas' for="relacion_interno">RELACION</label>
         <input type="text" id="relacion_interno" name='relacion_interno' class="form-control" placeholder="Relación con el interno" required autofocus>
         <div style='clear:left;'></div>
  
         <label class='etiquetas' for="de_paso">DE PASO</label>
         <select id='de_paso' name='de_paso' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
               <option value="N/C">NO SE</option>
                <option value="N/A">NO APLICA</option>
          </select>

        <label class='etiquetas' for="destino" >DESTINO</label>
        <input type="text" id="destino" name='destino' class="form-control" placeholder="Destino (Origen)" required autofocus>
        <label class='etiquetas' for="migracion_regulada">MIGRACION REGULADA</label>
         <select id='migracion_regulada' name='migracion_regulada' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
               <option value="N/C">NO SE</option>
                <option value="N/A">NO APLICA</option>
          </select>
       <div style='clear:left;'></div>

    
       <label class='etiquetas' for="residente">RESIDENTE EN CAMPECHE</label>
          <select id='migracion_regulada' name='migracion_regulada' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
          </select>

        <label class='etiquetas' for="residencia_campeche">RESIDENCIA</label>
        <input type="text" id="residencia_campeche" name='residencia_campeche' class="form-control" placeholder="Residencia en Campeche">

        <div style='clear:left;'></div>

        <label class='etiquetas' for="observaciones">OBSERVACIONES</label>
        <textarea name='observaciones' id='observaciones' cols="10" rows="5"></textarea>


        <label class='etiquetas' for="condiciones">CONDICIONES</label>
        <textarea name='condiciones' id='condiciones' cols="10" rows="5"></textarea>

        <div style='clear:left;'></div>
        <label class='etiquetas' for="fecha_creacion">FECHA CREACIÓN</label>
        <input type="text" id="fecha_creacion" name='fecha_creacion' class="form-control" placeholder="2016-12-05 12:30" readonly>

        <label class='etiquetas' for="fecha_modificacion">FECHA MODIFICACIÓN</label>
        <input type="text" id="fecha_modificacion" name='fecha_modificacion' class="form-control" placeholder="2016-12-05 12:30" readonly>


      <button class="btnExpediente" type="submit">Crear</button>

     </form>
</div>

 <div class="my-modal-base">
    <div class="my-modal-cont"></div>
</div>