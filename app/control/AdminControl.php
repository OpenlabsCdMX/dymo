<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class AdminControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $catalogo = new Catalogo();
       $lista_internos = $catalogo->GetInternos();
       
       $num_list= count($lista_internos);
       $this->vista->assign('listado_internos',$lista_internos);
       $this->vista->assign('num',$num_list);
       $this->vista->display("admin.tpl.html");
    }
    function registrarInterno(){ 
       ErrorHandler::SetHandler();
       $this->vista->display("registroInterno.tpl.html"); 
    }
    function registrarExpediente(){
       $this->set_date(); 
       ErrorHandler::SetHandler();
       $this->vista->display("registroExpediente.tpl.html");
    }
   /* function faseExpedientes(){
       $num_exp =$_GET['num_exp']; 
       $this->vista->assign('numero_expediente',$num_exp);
       $this->vista->display("faseExpediente.tpl.html"); 
    }*/
    
}
?>
