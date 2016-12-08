<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class InternoControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $num_int =$_GET['num_interno']; 
       
       $catalogo = new Catalogo();
       $datos_interno = $catalogo->GetInterno($num_int);
       $id_persona = $datos_interno[0]['PERSONA_ID_PERSONA']; 
       $datos_persona = $catalogo->GetDatosPersona($id_persona);
      
       
       $num_list_interno= count($datos_interno);
       $num_list_persona= count($datos_persona);
       
       $this->vista->assign('numero_internos',$num_list_interno);
       $this->vista->assign('numero_personas',$num_list_persona);
       
       $this->vista->assign('dato_interno',$datos_interno);
       $this->vista->assign('dato_persona',$datos_persona);
       
       $this->vista->display("interno.tpl.html");
   
    }
}
?>
