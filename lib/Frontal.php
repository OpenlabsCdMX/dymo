<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Frontal
 *
 * @author sebastian
 */
class Frontal {
    //put your code here
    function execute(){
            if   (isSet ($_GET [ 'controlador'] ) ){
                $controlador   =  ucfirst($_GET ['controlador'] )."Control" ;
            }
            else{
                $controlador  =   "IndexControl" ;
            }
            
            if (isSet($_GET ['action'] ) ){
                $action   =   lcfirst($_GET [ 'action' ] ) ;
            }
            else{
                $action   =   "index" ;
            }

            $ruta  =  "control" . DIRECTORY_SEPARATOR . $controlador . ".php" ;

            if ( file_exists( "../app" . DIRECTORY_SEPARATOR . $ruta) ){
                require_once( "../app/".$ruta ) ;
            }
            else{
                throw new Exception( "El controlador no existe" ) ;
            }


            //  Se instancia el objeto
            eval ( "\$ctrl   =  new  $controlador();" ) ;
            //    es necesario verificar que la accion exista
            if   ( !method_exists( $ctrl, $action ) )   {
                throw new Exception   ( " La accion    <b> $action </ b> no existe" );
            }
            //  para finalizar se ejecuta la accion correspondiente
                call_user_func( array( $ctrl, $action ) ) ;
        }
}
?>
