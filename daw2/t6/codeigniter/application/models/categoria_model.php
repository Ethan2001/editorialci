<?php
class categoria_model extends CI_Model{
	public function  crear($nombre){
		$categoria=R::dispense('categoria');
		
		$categoria->nombre=$nombre;
		
		R::store($categoria);
		R::close();
	}
	public function todos(){

		return R::find('categoria');
	}
}
	?>