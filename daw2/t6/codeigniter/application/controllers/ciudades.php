<?php


 class  Ciudades extends CI_Controller{
 	
 	
 	public function  crear(){
 	$this->crear();
 	enmarcar($this,'ciudades/crear');
 	
 }
   public  function crearpost(){
   	$nombre=$_POST['nombre'];

   	$this->load->model("ciudades_model");
   	$this->ciudades_model->crearpost($nombre);
   }
 
 
 }

?>