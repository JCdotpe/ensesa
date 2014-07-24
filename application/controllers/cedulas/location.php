<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	private $parameters;
	private $condition;

	function __construct()
	{
		parent::__construct();

		$this->load->library('ion_auth');
		$this->load->model('location_model');
	}

	public function get_ubicacion_vivienda()
	{
		$keys = $this->input->post('key');

		for ($i=0; $i < count($keys) ; $i++)
		{
			if ( $keys[$i]['name'] != "search" )
			{
				$and = ( $i == 0 ) ? '' : ' AND ';
				$this->condition .= $and . $keys[$i]['name'] . " = '" . $keys[$i]['value'] ."'";
			}
			else if ( $keys[$i]['name'] == "search" )
			{
				$field = $keys[$i]['value'];
			}
		}

		$this->parameters['VIVIENDA'] = $this->location_model->select_for_field( 'PadVivienda', $field, $this->condition )->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	public function get_ubicacion_hogar()
	{
		$keys = $this->input->post('key');

		for ($i=0; $i < count($keys); $i++)
		{ 
			$and = ( $i == 0 ) ? '' : ' AND ';
			$this->condition .= $and . $keys[$i]['name'] . " = '" . $keys[$i]['value'] ."'";
		}

		$result = $this->location_model->select_data( 'PadVivienda', $this->condition )->row();

		$this->condition = 'Cod_Vivienda = ' . $result->Cod_Vivienda;

		$this->parameters['HOGAR'] = $this->location_model->select_data( 'E1_Vivienda_Hogar', $this->condition )->row();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}

?>