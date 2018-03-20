<?php
class Candidato_model extends CI_Model {
	
	function crear ( $nombre , $nivel ){
		$candidato = R::dispense('candidato');
		
		$candidato->nombre = $nombre;
		$candidato->nivel = $nivel;
		
		R::store($candidato);
		R::close();
	}
}
?>