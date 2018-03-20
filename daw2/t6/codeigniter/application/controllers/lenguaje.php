<?php


 class  Lenguaje extends CI_Controller{
 	
 	
 	public function  crear(){
 	
 	enmarcar($this,'lenguaje/crear');
 	
 }
   public  function crearpost(){
   	$nombre=$_POST['nombre'];

   	$this->load->model("lenguajes_model");
   	$this->lenguajes_model->crearpost($nombre);
   	
   }
 
 
 }

?>