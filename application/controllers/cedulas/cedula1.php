<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('cedula1_model');
		$this->load->library('ion_auth');
	}

	public function index()
	{


		



		$data['title'] = 'Doc. ENSENSA 01';
		$data['nav'] = 'cedula1';
		$data['main_content'] = 'cedulas/cedula1';
		$dep = $this->input->post('A_1_Cod_Dpto');
		if ($dep == '01') {
			redirect('cedulas/cedula1/cod/'.'00001');
		}else{
			echo $dep;
			$this->load->view('frontend/template', $data);
		}

		
	}

	function cod($cod_vivienda)
	{
		$data['arrayDepartamento'] = array();
		$data['arrayProvincia']  = array();
		$data['arrayDistrito'] = array();
		$data['cod_vivienda'] = $cod_vivienda;
		$data['title'] = 'Doc. ENSENSA 01';
		$data['nav'] = 'cedula1';
		$data['main_content'] = 'cedulas/cedula1';
		$this->load->view('frontend/template', $data);
	}
	function test()
	{
		$get = $this->input->post('data');
		$data = array();
		foreach ($get as $key => $row) {
			foreach ($row as $idx => $value) {
				//var_dump($value);
				$data[$value['name']] = $value['value'];
				//echo($value);
			}
			
			//echo var_dump($value);
		}
		echo json_encode($data);
	}

	function validate_cod()
	{
		return true;
	}

}