<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class ExpedienteFaseInicialControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $num_exp =$_GET['num_exp']; 
       //$id_per =$_GET['id_persona']; 
       $id_int =$_GET['id_interno']; 
       
       $catalogo = new Catalogo();
       $datos_interno = $catalogo->GetInterno($id_int);
       $id_persona = $datos_interno[0]['PERSONA_ID_PERSONA']; 
       $datos_persona = $catalogo->GetDatosPersona($id_persona);
      
       $this->vista->assign('interno_id',$id_int);
       $this->vista->assign('dato_persona',$datos_persona);
       $this->vista->assign('numero_expediente',$num_exp);
       $this->vista->display("faseExpediente.tpl.html"); 
       
    }
}
?>
