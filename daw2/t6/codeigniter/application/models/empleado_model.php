<?php
class Empleado_model extends CI_Model {

public function verificar($nombre,$contrasena) {
	//tiene un id por esom dadba error en rb--> ojo con esto<--
	
		$ok = false;
		$empleado = R::findOne('empleado','nombre =?',[$nombre]);
		if ($empleado!=null && $empleado->contraseña == $contrasena) {
			$ok = true;
			
		}
		
		return $nombre;
	}
	
	
	public function crear($nombre,$passwd,$ap1,$ap2,$tlf,$idciudad,$idleng){
		$empleado=R::dispense('empleado');
		$empleado->nombre=$nombre;
		$empleado->passwd=$passwd;
		$empleado->ap1=$ap1;
		$empleado->ap2=$ap2;
		$empleado->tlf=$tlf;
		$empleado->ciudad=R::load('ciudad',$idciudad);
		$empleado->sharedlenguajeList=[];
		foreach ($idleng as $$idlengs){
			$empleado->sharedlenguajeList[]=R::load('lenguaje',$$idlengs);;
		}
		//$empleado->ciudad=$ciudad;
		// no te olvides del store que si no tiene sesto no se crea la tabla
		//ojo
	
		R::store($empleado);
		R::close();
	}
	public function getAll($filtro){
		return R::find('empleado', "nombre like ?", ['%' . $filtro . '%']);
	}
	public function borrar($id){
		$lp= R::load('empleado',$id);
		if($lp->id !=0){
			R::trash($lp);
		}
		R::close();
	}
}
	?>