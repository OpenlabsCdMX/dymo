<?php
require_once ('/var/www/html/proyecto_DYMO/app/vistas/smarty/libs/Smarty.class.php');

class Controlador {
    function   __construct(){
        //session_start();
        $this->vista =  new Smarty();
        $this->vista->template_dir = '../app/vistas/smarty/demo/templates';
        $this->vista->config_dir = '../app/vistas/smarty/demo/templates/configs';
        $this->vista->cache_dir = '../app/vistas/smarty/demo/templates/cache';
        $this->vista->compile_dir = '../app/vistas/smarty/demo/templates/templates_c';
    }
    function set_date(){
        date_default_timezone_set('America/Bogota');
	$semana= array('Domingo', 'Lunes', 'Martes', 'Mi&#233;rcoles', 'Jueves', 'Viernes', 'S&#225;bado');
	$mes=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        $fecha = getdate();
	$y=$fecha['year'];
	$d=$fecha['mday'];
	$m=$fecha['mon'];
	$m=$m-1;
	$dia_semana=$semana[$fecha['wday']];
	$mes_a=$mes[$m];	
	$this->vista->assign('date', $y);
	$this->vista->assign('dia', $d);
	$this->vista->assign('diasem', $dia_semana);
	$this->vista->assign('mes', $mes_a);
    }
}
?>
