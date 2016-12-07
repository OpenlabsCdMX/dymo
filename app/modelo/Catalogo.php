<?php
    require_once ("Interno.php");
    require_once ("BaseDatosControl.php");

    class Catalogo {
        private static $instance;

        public function __construct(){
        }

        public static function GetInternos() {  
            $sql = "CALL getInternos();";
            return BaseDatosControl::GetAll($sql);
        }
        
        public static function GetInterno($id) {  
            $sql = "CALL buscar_interno(".$id.");";
            return BaseDatosControl::GetAll($sql);
        }
        
        public static function GetPersona($nombre) {
            $sql = "CALL buscar_persona("."'".$nombre."'".");";
            return BaseDatosControl::GetAll($sql);
        }
        
        public static function GetExpedientes() {
            $sql = "CALL ver_expedientes();";
            return BaseDatosControl::GetAll($sql);
        }
        
        
        public static function RegistrarInternos($p1, $p2, $p3, $p4, $p5){
            $sql = "CALL ingresar_internos_p("."'".$p1."'".','."'".$p2."'".','.$p3.','.$p4.','.$p5.");";
            BaseDatosControl::Execute($sql);
        }
        
        public static function RegistrarPersonas($p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9){
            $sql = "CALL insertar_persona("."'".$p1."'".','."'".$p2."'".','."'".$p3."'".','."'".$p4."'".','."'".$p5."'".','."'".$p6."'".','."'".$p7."'".','."'".$p8."'".','.$p9.");";
            BaseDatosControl::Execute($sql);
        } 
        
        public static function RegistrarInternoPersona($p1, $p2, $p3, $p4,$p5){
            $sql = "CALL insertar_interno_persona("."'".$p1."'".','."'".$p2."'".','.$p3.','.$p4.','.$p5.");";
            BaseDatosControl::Execute($sql);
            header('Location: http://localhost/proyecto_DYMO/web/index.php?controlador=Admin');
        } 
        
        public static function RegistrarExpediente($p1, $p2, $p3){
            $sql = "CALL insertar_expediente(".$p1.','."'".$p2."'".','.$p3.")";
            BaseDatosControl::Execute($sql);
            header('Location: http://localhost/proyecto_DYMO/web/index.php?controlador=Admin&action=registrarExpediente');
        }
        
        public static function verificar_usuario($usuario,$pass){	
		$sql = "CALL deme_login_info_usuario(".'"'.$usuario.'"'.");";
                //$myDB = new ControladorBaseDatos();
            	//$result=$myDB->SelectQuery($sql);
		
                $i=0;
		$passw= $result[$i]['password'];
		$salt="$!R6";
		$passworddc = $salt . $pass . $salt; 
		$p = sha1($passworddc);
		
		if (empty ($result))
			{$res=1;}
		else
		{ 
			if ($passw == $p)
				{$res=2;}
			else
				{$res=1;}
		}
		return $res;
	}

	public static function registrar_usuario($usuario, $email, $pass){
		$sql = "CALL agregar_usuario(".'"'.$usuario.'"'.','.'"'.$email.'"'.','.'"'.$pass.'"'.");";
//		$myDB = new ControladorBaseDatos();
//            	$result=$myDB->SelectQuery($sql);
	}
    }
?>
