<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class RegistroInternoControl extends Controlador {
    function index(){
        if (isset ($_POST["nombrePersona"])){    
                $alias = $_POST["aliasInterno"];
                $edad= $_POST["edadInterno"];
                $fecha_nac= $_POST["fechaNacimientoInterno"];
                $cod_lugar=5; //lugar interno
                $p1= $_POST["nombrePersona"];
                $p2= $_POST["apellidoPersona"];
                $p3= $_POST["direccionPersona"];
                $p4= $_POST["telefonoPersona"];
                $p5= $_POST["celularPersona"];
                $p6= $_POST["casetaPersona"];
                $p7= $_POST["emailPersona"];
                $p8= $_POST["sexoPersona"];
                $p9="1"; //lugar persona
                $catalogo = new Catalogo();
                $catalogo->RegistrarPersonas($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9);
                $catalogo->RegistrarInternoPersona($alias, $fecha_nac, $edad, 0,$cod_lugar);
        }
        $this->set_date();
    }
}
?>
