<div id='expediente'>Cliente Entevista Inicial
     <form class="expediente" id='expediente' name='expediente'>
        <h3 class="cabecera">RUTA DIMO: {$numero_expediente}</h3>
         <label class='etiquetas' for="buscar_cliente">CLIENTE(INTERNO)</label>
         
             <input type="text" id="buscar_cliente" name='buscar_cliente' class="form-control" placeholder="Buscar Cliente" readonly>
             <label class='etiquetas' for="tipo_defensa">TIPO DEFENSA</label>
         <select id='tipo_defensa' name='tipo_defensa' required autofocus>
              <option>SELECCIONAR</option>
               <option value="OFICIO">OFICIO</option>
               <option value="PRIVADO">PRIVADO</option>
          </select>
         <div style='clear:left;'></div>
        <label class='etiquetas' for="defensor">DEFENSOR</label>
        <input type="text" id="defensor" name='defensor' class="form-control" placeholder="Nombre del Defensor" required autofocus>
         <label class='etiquetas' for="de_paso">DE PASO</label>
         <select id='de_paso' name='de_paso' required autofocus>
              <option>SELECCIONAR</option>
               <option value="SI">SI</option>
               <option value="NO">NO</option>
               <option value="N/C">NO SE</option>
                <option value="N/A">NO APLICA</option>
          </select>

        <div style='clear:left;'></div>
        <label class='etiquetas' for="defensor" >DESTINO</label>
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
        <label class='etiquetas' for="fecha_creacion">FECHA CREACIÓN</label>
        <input type="text" id="fecha_creacion" name='fecha_creacion' class="form-control" placeholder="2016-12-05 12:30" readonly>

        <label class='etiquetas' for="fecha_modificacion">FECHA MODIFICACIÓN</label>
        <input type="text" id="fecha_modificacion" name='fecha_modificacion' class="form-control" placeholder="2016-12-05 12:30" readonly>


      <button class="btnEntrevista" type="submit">Crear</button>

     </form>
</div>

 <div class="my-modal-base">
    <div class="my-modal-cont"></div>
</div>
