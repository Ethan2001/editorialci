<?php 

class lenguajes_model extends CI_Model{
	
	
	function crearpost($nombre){
		$lenguajes=R::dispense("lenguajes");
		$lenguajes->nombre=$nombre;
		R::store($lenguajes);
		R::close();
	}
	
	function getAll(){
		return R::findAll("lenguajes");
	}
	
	
	
}




?>