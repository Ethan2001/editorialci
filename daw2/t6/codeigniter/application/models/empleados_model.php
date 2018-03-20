<?php 
class Empleados_model extends CI_Model{
	
	
	 public function crearpost($nombre,$fecha,$ciudad,$idleng) {
	 	$empleados=R::dispense("empleados");
	 	$empleados->nombre=$nombre;
	 	$empleados->fecha=$fecha;
	 	
	 	$ciudades=R::load("ciudades",$ciudad);
	 	$ciudades->xownEmpleadoslist[]=$empleados;
	 	//$empleados->sharedlenguajesList=[];
	 	
	 	/*foreach ($idleng as $idlengs){
	 		$empleados->sharedlenguajesList[]=R::load('lenguajes',$idlengs);
	 	}*/
	 	R::store($ciudades);
	 	R::close();
	 }
	
	
	
	
	
}







?>