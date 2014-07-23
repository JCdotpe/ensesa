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
				if ( trim($keys[$i]['value']) != '' )
				{
					$and = ( $i == 0 ) ? '' : ' AND ';
					$this->condition .= $and . $keys[$i]['name'] . " = '" . $keys[$i]['value'] ."'";
				}
			}
			else
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
		// $this->parameters['HOGAR'] = $this->base_model->select_data( 'E1_Vivienda_Hogar', $this->condition )->result();

		// $data['datos'] = $this->parameters;
		// $this->load->view('frontend/json/json_view', $data);
	}

}

?>