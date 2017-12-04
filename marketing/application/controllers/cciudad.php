<?php
/**
* 
*/
class Cciudad extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mciudad');
		if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
	}

	public function getCiudades(){
		$s = $this->input->post('sitReg');
		$resultado = $this->mciudad->getCiudades($s);

		echo json_encode($resultado);
	}

	//borrar esto
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vPrueba');
		$this->load->view('layout/footer');
		
	}

	public function getCiudadByNombre(){
		$text = $this->input->post('texto');
		$resultado = $this->mciudad->getCiudadByNombre($text);
		echo json_encode($resultado);
	}
}