<?php
class candidato_model extends CI_Model{
	public function  crear($nombre,$opcion){
		$candidato=R::dispense('candidato');
		//necesita eso para poder crear con el nombre 
		//que le encias por medio de l formulario
		$candidato->nombre=$nombre;
		$candidato->opcion=$opcion;
		R::store($candidato);
		R::close();
	}
 public function todos(){
 	  
		return R::find('candidato');
	} 
	public function getId($id){
		return R::load('candidato',$id);
	}
	
	
	public function editar($idnombre,$nnombre){
		$cand=R::load('candidato',$idnombre);
		$cand->nombre=$nnombre;
		R::store($cand);
		R::close();
	}
	public function borrar($idnombre){
		$cand= R::load('candidato',$idnombre);
		if($cand->id !=0){
			R::trash($cand);
		}
		R::close();
	}
}
?>