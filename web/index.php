<?php
    $root = dirname(__FILE__) . DIRECTORY_SEPARATOR;
    require_once('../lib/Frontal.php');
    $frontal = new Frontal();
    try{
        $frontal->execute() ;
    }
    catch   ( Exception $e )   {
        echo   "Excepcion en la aplicacion. <br/> ";
    }
?>