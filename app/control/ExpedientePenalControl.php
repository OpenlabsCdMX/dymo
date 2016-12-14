<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class ExpedientePenalControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $num_exp =$_GET['num_exp']; 
       $id_interno =$_GET['id_interno']; 
//       
//       $catalogo = new Catalogo();
//       $datos_interno = $catalogo->GetInterno($id_interno);
//       $id_persona = $datos_interno[0]['PERSONA_ID_PERSONA']; 
//       $datos_persona = $catalogo->GetDatosPersona($id_persona);
//      
//       
//       $this->vista->assign('dato_persona',$datos_persona);
       $this->vista->assign('interno_id',$id_interno);
       $this->vista->assign('numero_expediente',$num_exp);
       $this->vista->display("fasePenal.tpl.html"); 
       
    }
}
?>
