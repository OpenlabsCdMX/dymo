<?php
require_once 'Controlador.php';
//require_once ('/var/www/html/proyecto_DYMO/lib/Config.php');
require_once ("../app/modelo/ErrorHandler.php");

class IndexControl extends Controlador {
    function index(){
       ErrorHandler::SetHandler();
       $this->set_date(); 
       $this->vista->assign("titulo", "Proyecto DYMO");
       $this->vista->display("index.tpl.html");
    }
}
?>
