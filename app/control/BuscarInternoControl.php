<?php
    require_once 'Controlador.php';
    require_once ("../app/modelo/ErrorHandler.php");
    require_once ("../app/modelo/Catalogo.php");
    
    class BuscarInternoControl extends Controlador {
        function index(){
           $nom = $_GET["nombre"];
           ErrorHandler::SetHandler();
                
           $catalogo = new Catalogo();
           $persona = $catalogo->GetPersona($nom);
           $id_persona = $persona[0]['ID_PERSONA'];
           
           $id_interno = $catalogo->GetInterno($id_persona);
           $id_int =  $id_interno[0]['ID_INTERNO'];
           $this->vista->assign('nombre',$persona);
           $this->vista->assign('interno_id',$id_int);
           $this->vista->display("buscar.tpl.html");
        }
    }
?>
