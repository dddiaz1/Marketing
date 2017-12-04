<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* 
*/
class Cagregar extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('magregar');
	}

	public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vagregar');
		$this->load->view('layout/footer');
	}


	public function guardar(){
		//persona
		$parama['nombre_evento'] = $this->input->post('txtNombreE');
		$parama['fecInicio'] = $this->input->post('datFecI');
		$parama['descripcion'] = $this->input->post('txtContenido');
		$parama['titImagen'] = $this->input->post('titImagen');
		$parama['fileImagen'] = $this->input->post('fileImagen');	
		$this->magregar->guardar($parama);	
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vagregar');
		$this->load->view('layout/footer');
	}
}