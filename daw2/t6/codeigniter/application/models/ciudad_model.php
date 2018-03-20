<?php
class ciudad_model extends CI_Model{
	 public function crear($nombre){
		$ciudad=R::dispense('ciudad');
		$ciudad->nombre=$nombre;
		R::store($ciudad);
		R::close();
	}
	public function getAll($filtro=''){
		//esto conecta con la base de datos
		return R::find('ciudad', 'nombre like ?',['%'.$filtro.'%']);
	
	
	}
	public function borrar($id){
		$lp= R::load('ciudad',$id);
		if($lp->id !=0){
			R::trash($lp);
		}
		R::close();
	}
	public function getId($id){
		return R::load('ciudad',$id);
	}
	public function editar($id,$nombre){
		$lp = R::load ( 'ciudad', $id );
	
		$lp->nombre = $nombre;
	
		R::store($lp);
		R::close();
	}

	
	
}
?>