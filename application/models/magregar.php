<?php
/**
* 
*/
class Magregar extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function guardar($parama){
		$camposa = array(
			'nombre_evento' => $parama ['nombre_evento'],
			'fecInicio' => $parama ['fecInicio'],
			'descripcion' => $parama ['descripcion'],
			'titImagen' => $parama ['titImagen'],
			'fileImagen' => $parama ['fileImagen'],

			
		);
		$this->db->insert('eventos', $camposa);
	}

}