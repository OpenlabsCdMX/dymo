<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class ExpedienteControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $catalogo = new Catalogo();
       $lista_expedientes = $catalogo->GetExpedientes();
       $num_list= count($lista_expedientes);
       
       $this->vista->assign('listado_expedientes',$lista_expedientes);
       $this->vista->assign('num',$num_list);
       $this->vista->display("expediente.tpl.html");
    }
}
?>
