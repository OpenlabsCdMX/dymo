<?php
class Interno {
    protected $id;
    protected $alias;
    protected $fecha_nac;
    protected $edad;	
    protected $id_persona;	
    protected $id_lugar;	
   
     //put your code here
    public function __construct(){}

    public function set_id($id){
         $this->id=$id;
    }
    public function set_alias($a){
         $this->alias=$a;
    }
    public function set_fecha_nac($fecha_nacimiento){
         $this->fecha_nac=$fecha_nacimiento;
    }
    public function set_edad($e){
         $this->edad=$e;
    }
    public function set_id_persona($id_per){
         $this->id_persona=$id_per;
    }	 
    public function set_id_lugar($id_lug){
         $this->id_lugar=$id_lug;
    }		 	
   
    public function get_id(){return $this->id;}
    public function get_alias(){return $this->alias;}
    public function get_fecha_nac(){return $this->fecha_nac;}
    public function get_edad(){return $this->edad;}	
    public function get_id_persona(){return $this->id_persona;}  
    public function get_id_lugar(){return $this->id_lugar;}		
}
?>
