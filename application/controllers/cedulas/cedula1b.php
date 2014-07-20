<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1b extends CI_Controller {

	protected $E1B_Recursos_Naturales;
	private $E1B_Recursos_Naturales_data;

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('ion_auth');
		$this->load->model('cedula1b_model');
	}

	private function get_fields($name_table)
	{
		$this->E1B_Recursos_Naturales = $this->cedula1b_model->get_fields($name_table);
	}


	public function index()
	{
		$data['title'] = 'Doc. ENSENSA 01B';
		$data['nav'] = 'cedula1b';
		$data['main_content'] = 'cedulas/cedula1b';

		$this->load->view('frontend/template', $data);
	}

	public function register_1b()
	{
		$this->get_fields('E1B_Recursos_Naturales');
		$this->E1B_Recursos_Naturales_data['Cod_Vivienda'] = '00001';

		foreach ($this->E1B_Recursos_Naturales as $key => $name_field)
		{
			
			if ( !in_array( $name_field, array('Cod_Vivienda') ) ) 
			{
				$this->E1B_Recursos_Naturales_data[$name_field] = ($this->input->post($name_field) == '') ? null : $this->input->post($name_field);
			}
		}

		$result = $this->cedula1b_model->insert_data( $this->E1B_Recursos_Naturales_data, 'E1B_Recursos_Naturales');

		if ( $result > 0) 
		{
			$msg = "Se ha registrado satisfactoriamente los datos del informante.";
		}
		else
		{
			$msg = "Se ha producido un error.";	
		}

		$datos['msg'] = $msg;

		$data['datos'] = $datos;
		$this->load->view('frontend/json/json_view', $data);

	}

	public function register_1b_100()
	{
		$this->E1B_Recursos_Naturales_data['Cod_Vivienda'] = '00001';

		$this->get_fields('E1B_Recursos_Naturales');

		foreach ($this->E1B_Recursos_Naturales as $key => $name_field)
		{
			if ( in_array( $name_field, array( 'E1_B_13_Nro_Hogar', 'E1_201_Nro', 'E1B_Ini_A', 'E1B_Fin_M', 'E1B_Fin_A', 'E1B_101_A', 'E1B_101_B_a', 'E1B_101_B_b', 'E1B_101_B_c', 'E1B_101_B_d', 'E1B_101_B_e', 'E1B_101_B_f', 'E1B_101_B_g', 'E1B_101_B_h', 'E1B_101_B_i', 'E1B_101_B_j', 'E1B_101_B_j_O', 'E1B_101_B_Total', 'E1B_101_B_Obs', 'E1B_101_C', 'E1B_101_D_a', 'E1B_101_D_b', 'E1B_101_D_c', 'E1B_101_D_d', 'E1B_101_D_e', 'E1B_101_D_f', 'E1B_101_D_g', 'E1B_101_D_h', 'E1B_101_D_h_O', 'E1B_101_D_Total', 'E1B_101_D_Obs') ) ) 
			{
				$this->E1B_Recursos_Naturales_data[$name_field] = ($this->input->post($name_field) == '') ? null : $this->input->post($name_field);
			}
		}

		$condition = array('Cod_Vivienda' => $this->E1B_Recursos_Naturales_data['Cod_Vivienda'], 'E1_B_13_Nro_Hogar' => $this->E1B_Recursos_Naturales_data['E1_B_13_Nro_Hogar'], 'E1_201_Nro' => $this->E1B_Recursos_Naturales_data['E1_201_Nro'] );

		$result = $this->cedula1b_model->update_data( $this->E1B_Recursos_Naturales_data, 'E1B_Recursos_Naturales', $condition);

		if ( $result > 0) 
		{
			$msg = "Se ha registrado satisfactoriamente los datos del 1B - 100.";
		}
		else
		{
			$msg = "Se ha producido un error.";	
		}

		$datos['msg'] = $msg;

		$data['datos'] = $datos;
		$this->load->view('frontend/json/json_view', $data);

	}

}