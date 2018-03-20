<?php 

 class Ciudades_model extends CI_Model{
 	
 	function crearpost($nombre){
 		$ciudades=R::dispense("ciudades");
 		$ciudades->nombre=$nombre;
 		R::store($ciudades);
 		R::close();
 		
 	}
 	
 	function  getAll(){
 		return R::findAll("ciudades");
 	}
 	
 	
 	
 	
 	
 	
 	
 }





?>