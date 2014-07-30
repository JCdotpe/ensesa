<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CI_Controller {

	private $parameters;
	private $condition;
	private $name_field;
	private $field_value;
	private $B_10_Vivienda_nro = false;
	private $arreglo;

	function __construct()
	{
		parent::__construct();

		$this->load->library('ion_auth');
		$this->load->model('location_model');

		if (!$this->ion_auth->logged_in()) 
		{
			show_404();
			die();
		}
	}

	public function get_ubicacion_vivienda()
	{
		$keys = $this->input->post('key');

		for ($i=0; $i < count($keys) ; $i++)
		{

			$this->name_field = $keys[$i]['name'];
			$this->field_value = $keys[$i]['value'];

			if ( $this->name_field != "search" )
			{
				$and = ( $i == 0 ) ? '' : ' AND ';
				if ( $this->field_value != 'null' )
				{
					$this->condition .= $and . $this->name_field . " = '" . $this->field_value ."'";	
				}
				else
				{
					$this->condition .= $and . $this->name_field . " is " . $this->field_value;
				}
			}
			else if ( $this->name_field == "search" )
			{
				if ( $this->field_value != 'B_10_Vivienda_nro' )
				{
					$field =  "DISTINCT ".$this->field_value." AS search_column";
				}
				else
				{
					$this->B_10_Vivienda_nro = true;
					$field =  "Cod_Vivienda, B_9_1_AER_ini, B_9_2_AER_fin, ".$this->field_value." AS search_column";
				}
			}
		}

		if ( $this->B_10_Vivienda_nro )
		{
			$this->arreglo = $this->location_model->select_for_field( 'PadVivienda', $field, $this->condition );

			$contenido = array();

			foreach ($this->arreglo->result() as $row)
			{
				array_push($contenido, array('Cod_Vivienda' => $this->my_encryption->encode($row->Cod_Vivienda), 'B_9_1_AER_ini' => $row->B_9_1_AER_ini, 'B_9_2_AER_fin' => $row->B_9_2_AER_fin, 'search_column' => $row->search_column ) );
			}
			$this->parameters['VIVIENDA'] = $contenido;
		}
		else
		{
			$this->parameters['VIVIENDA'] = $this->location_model->select_for_field( 'PadVivienda', $field, $this->condition )->result();
		}


		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

	public function get_ubicacion_hogar()
	{
		
		$this->condition = "Cod_Vivienda = '" . $this->my_encryption->decode( $this->input->post('vivienda') ). "'";

		$this->parameters['HOGAR'] = $this->location_model->select_for_field( 'E1_Vivienda_Hogar', 'E1_B_12', $this->condition )->row();
		$this->parameters['HOGAR_DETAIL'] = $this->location_model->select_for_field( 'E1_Vivienda_Hogar', 'E1_B_13_Nro_Hogar', $this->condition )->result();

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}

?>