<?php


 class  Empleados extends CI_Controller{
 	
 	
 	public function  crear(){
 		$this->load->model("ciudades_model");
 		$this->load->model("lenguajes_model");
 	
 		$datos["ciu"]=$this->ciudades_model->getAll();
 		$datos["leng"]=$this->lenguajes_model->getAll();
 		
 	enmarcar($this,'empleados/crear',$datos);
 	
 }
   public  function crearpost(){
   	$nombre=$_POST['nombre'];
   	$fecha=$_POST['fecha'];
   	$ciudades=isset($_POST["idciudades"])?$_POST["idciudades"]:null;
   	
   	$lenguajes=isset($_POST["idleng"])?$_POST["idleng"]:[ ];
   	
   	$this->load->model("empleados_model");
   	$this->empleados_model->crearpost($nombre,$fecha,$ciudades,$lenguajes);
   }
 
 
 }

?>