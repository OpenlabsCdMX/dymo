<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class FormularioPruebaControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       
       
       $this->vista->display("formularioPrueba.tpl.html");
    }
}
?>
