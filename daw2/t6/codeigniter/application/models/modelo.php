<?php
 class Modelo extends CI_Model{
  public function cargarArray(){
   // creamos array que cargaremos
   $data=array(
    'nombre'=>'Nombre: Ludwing,',
    'apellido'=>'Apellido: Salinas'
   );
   return $data;
  }
 }
?>
