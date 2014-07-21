<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cedula1b extends CI_Controller {

	private $table_master;
	private $table_details;
	private $table_local;

	private $array_primary_key;

	private $data_master;
	private $data_deails;

	private $array_fields;
	private $condition;
	private $number_rows;
	private $result;
	private $result_boolen;
	private $message;
	private $parameters;

	function __construct()
	{
		parent::__construct();
		
		$this->load->library('ion_auth');
		$this->load->model('cedula1b_model');

		$this->table_master = 'E1B_Recursos_Naturales';
		$this->table_details = 'E1B_Produccion_Recursos';
	}

	public function index()
	{
		$this->parameters['title'] = 'Doc. ENSENSA 01B';
		$this->parameters['nav'] = 'cedula1b';
		$this->parameters['main_content'] = 'cedulas/cedula1b';

		$this->load->view('frontend/template', $this->parameters);
	}

	public function register_1b()
	{
		// Data General //
		$this->get_fields( $this->table_master );
		$this->primary_key();

		$this->array_fields = array( 'E1B_Informante_Nro', 'E1B_13', 'E1B_13_Obs' );
		$this->result_boolen = $this->operation_data( $this->array_fields );


		// End Transaction //
		$this->operation_result( $this->result_boolen, "los datos del informante" );
	}

	public function register_1b_100()
	{
		// Data General //
		$this->get_fields( $this->table_master );
		$this->primary_key();
		

		$this->array_fields = array( 'E1B_Ini_A', 'E1B_Fin_M', 'E1B_Fin_A', 'E1B_101_A', 'E1B_101_B_a', 'E1B_101_B_b', 'E1B_101_B_c', 'E1B_101_B_d', 'E1B_101_B_e', 'E1B_101_B_f', 'E1B_101_B_g', 'E1B_101_B_h', 'E1B_101_B_i', 'E1B_101_B_j', 'E1B_101_B_j_O', 'E1B_101_B_Total', 'E1B_101_B_Obs', 'E1B_101_C', 'E1B_101_D_a', 'E1B_101_D_b', 'E1B_101_D_c', 'E1B_101_D_d', 'E1B_101_D_e', 'E1B_101_D_f', 'E1B_101_D_g', 'E1B_101_D_h', 'E1B_101_D_h_O', 'E1B_101_D_Total', 'E1B_101_D_Obs' );

		$this->result_boolen = $this->operation_data( $this->array_fields );


		// Data Dynamic //
		$this->get_fields( $this->table_details );

		$this->condition =  $this->condition . ' AND E1B_Tipo = "PC" OR E1B_Tipo = "SC"';

		$this->result_boolen = ( $this->result_boolen == true ) ? $this->operation_data_details() : false;


		// End Transaction //
		$this->operation_result( $this->result_boolen, "los datos de la seccion 100." );
	}

	public function register_1b_200()
	{
		// Data General //
		$this->get_fields( $this->table_master );
		$this->primary_key();


		$this->array_fields = array( 'E1B_201_A', 'E1B_201_B_a', 'E1B_201_B_b', 'E1B_201_B_c', 'E1B_201_B_d', 'E1B_201_B_e', 'E1B_201_B_f', 'E1B_201_B_g', 'E1B_201_B_h', 'E1B_201_B_h_O', 'E1B_201_B_Total', 'E1B_201_B_Obs', 'E1B_201_C', 'E1B_201_D_a', 'E1B_201_D_b', 'E1B_201_D_c', 'E1B_201_D_d', 'E1B_201_D_e', 'E1B_201_D_f', 'E1B_201_D_g', 'E1B_201_D_h', 'E1B_201_D_h_O', 'E1B_201_D_Total', 'E1B_201_D_Obs' );

		$this->result_boolen = $this->operation_data( $this->array_fields );

		
		// Data Dynamic //
		$this->get_fields( $this->table_details );

		$this->condition = $this->condition . ' AND E1B_Tipo = "PR" OR E1B_Tipo = "SR"';

		$this->result_boolen = ( $this->result_boolen == true ) ? $this->operation_data_details() : false;


		// End Transaction //
		$this->operation_result( $this->result_boolen, "los datos de la seccion 200." );
	}


	public function register_1b_300()
	{
		// Data General //
		$this->get_fields( $this->table_master );
		$this->primary_key();


		$this->array_fields = array( 'E1B_301_A', 'E1B_301_B_a', 'E1B_301_B_b', 'E1B_301_B_c', 'E1B_301_B_d', 'E1B_301_B_e', 'E1B_301_B_f', 'E1B_301_B_g', 'E1B_301_B_h', 'E1B_301_B_i', 'E1B_301_B_i_O', 'E1B_301_B_Total', 'E1B_301_B_Obs', 'E1B_301_C', 'E1B_301_D_a', 'E1B_301_D_b', 'E1B_301_D_c', 'E1B_301_D_d', 'E1B_301_D_e', 'E1B_301_D_f', 'E1B_301_D_g', 'E1B_301_D_h', 'E1B_301_D_h_O', 'E1B_301_D_Total', 'E1B_301_D_Obs' );

		$this->result_boolen = $this->operation_data( $this->array_fields );


		// Data Dynamic //
		$this->get_fields( $this->table_details );

		$this->condition = $this->condition . ' AND E1B_Tipo = "PA" OR E1B_Tipo = "SA"';

		$this->result_boolen = ( $this->result_boolen == true ) ? $this->operation_data_details() : false;


		// End Transaction //

		$this->operation_result( $this->result_boolen, "los datos de la seccion 300." );
	}


	private function get_fields($name_table)
	{
		$this->table_local = $this->cedula1b_model->get_fields($name_table);
	}

	private function primary_key()
	{
		$this->Cod_Vivienda = '00001';
		$this->E1_B_13_Nro_Hogar = $this->input->post('E1_B_13_Nro_Hogar');
		$this->E1_201_Nro = $this->input->post('E1_201_Nro');

		$this->data_master['Cod_Vivienda'] = $this->Cod_Vivienda;
		$this->data_master['E1_B_13_Nro_Hogar'] = $this->E1_B_13_Nro_Hogar;
		$this->data_master['E1_201_Nro'] = $this->E1_201_Nro;

		$this->data_deails['Cod_Vivienda'] = $this->Cod_Vivienda;
		$this->data_deails['E1_B_13_Nro_Hogar'] = $this->E1_B_13_Nro_Hogar;
		$this->data_deails['E1_201_Nro'] = $this->E1_201_Nro;

		$this->condition = 'Cod_Vivienda = ' . '00001' . ' AND E1_B_13_Nro_Hogar = ' . $this->E1_B_13_Nro_Hogar . ' AND E1_201_Nro = ' . $this->E1_201_Nro;

		$this->array_primary_key = array( 'Cod_Vivienda', 'E1_B_13_Nro_Hogar', 'E1_201_Nro' );

	}

	private function operation_data( $array_fields )
	{
		foreach ($this->table_local as $key => $name_field)
		{
			if ( in_array( $name_field, $array_fields ) )
			{
				$this->data_master[$name_field] = ($this->input->post($name_field) == '') ? null : $this->input->post($name_field);
			}
		}

		$this->number_rows = $this->cedula1b_model->count_result( $this->condition, $this->table_master );

		if ( $this->number_rows > 0 )
		{
			$this->result = $this->cedula1b_model->update_data( $this->data_master, $this->table_master, $this->condition );
		}
		else
		{
			$this->result = $this->cedula1b_model->insert_data( $this->data_master, $this->table_master );
		}

		return ( $this->result > 0 ) ? true : false;

	}

	private function operation_data_details()
	{
		foreach ($this->table_local as $key => $name_field)
		{
			if ( !in_array( $name_field, $this->array_primary_key ) ) 
			{
				$this->data_master[$name_field] = ($this->input->post($name_field) == '') ? null : $this->input->post($name_field);
			}
		}

		$this->number_rows = $this->cedula1b_model->count_result( $this->condition, $this->table_details );

		if ( $this->number_rows > 0)
		{
			$this->result = $this->cedula1b_model->delete_data( $this->table_details, $this->condition );
			if ( $this->result == 0 )
			{
				return false;
			}
		}

		foreach ($this->data_master['E1B_Tipo_Nro'] as $key => $value) 
		{
			foreach ($this->table_local as $second_key => $name_field)
			{
				if ( !in_array( $name_field, $this->array_primary_key ) ) 
				{
					if ( $name_field == 'E1B_Tipo_Nro' )
					{
						$tipo = explode( "-", $value );
						$this->data_deails['E1B_Tipo'] = $tipo[0];
						$this->data_deails['E1B_Tipo_Nro'] = $tipo[1];
					}
					else
					{
						$this->data_deails[$name_field] = @$this->data_master[$name_field][$key];	
					}
				}
			}

			$this->result = $this->cedula1b_model->insert_data( $this->data_deails, $this->table_details );
		}

		return ( $this->result > 0 ) ? true : false;

	}

	private function operation_result($boolean, $message_succes)
	{
		if ( $boolean ) 
		{
			$this->message = "Se ha registrado satisfactoriamente " . $message_succes;
		}
		else
		{
			$this->message = "Se ha producido un error, recargue, verifique y vuelvalo a intentar.";
		}

		$this->parameters['msg'] = $this->message;

		$data['datos'] = $this->parameters;
		$this->load->view('frontend/json/json_view', $data);
	}

}