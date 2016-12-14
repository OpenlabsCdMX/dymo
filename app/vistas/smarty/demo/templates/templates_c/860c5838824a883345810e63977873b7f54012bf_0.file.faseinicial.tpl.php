<?php
/* Smarty version 3.1.29, created on 2016-12-08 10:09:47
  from "/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/faseinicial.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_584985cb7ad9c6_68642939',
  'file_dependency' => 
  array (
    '860c5838824a883345810e63977873b7f54012bf' => 
    array (
      0 => '/var/www/html/proyecto_DYMO/app/vistas/smarty/demo/templates/admin/faseinicial.tpl',
      1 => 1481157042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584985cb7ad9c6_68642939 ($_smarty_tpl) {
?>
<div id='expediente'>Cliente Entevista Inicial
    <form class="expediente" id='expediente' name='expediente'>
        <h3 class="cabecera">RUTA DIMO: <?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
</h3>
        <label class='etiquetas' for="buscar_cliente">CLIENTE(INTERNO)</label>

        <input type="text" id="buscar_cliente" name='buscar_cliente' class="form-control" readonly>
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
        <input type="hidden" name="numero_expediente" value="<?php echo $_smarty_tpl->tpl_vars['numero_expediente']->value;?>
">

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
<?php }
}
