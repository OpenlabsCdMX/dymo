<?php
require_once 'Controlador.php';
require_once ("../app/modelo/ErrorHandler.php");
require_once ("../app/modelo/Catalogo.php");

class RegistroExpedienteControl extends Controlador {
    function index(){
        if (isset ($_POST["num_ruta_dymo"])){    
                $num_exp = $_POST["num_ruta_dymo"];
                $id_interno= $_POST["id_interno"];
                
                $fecha = getdate();
                $y=$fecha['year'];
                $d=$fecha['mday'];
                $m=$fecha['mon'];
                $m=$m-1;
                $fecha_exp = $y.'-'.$m.'-'.$d;
                
                $catalogo = new Catalogo();
                $catalogo->RegistrarExpediente($num_exp, $fecha_exp, $id_interno);    
        }   
    }
}
?>
