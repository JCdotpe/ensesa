<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Cedula1b_model extends Base_model
	{
		function get_data_person( $fields, $table, $condition )
		{
			$this->db->select( $fields );
			$this->db->from( $table );
			$this->db->where( $condition );
			$query = $this->db->get();
			return $query;
		}
	}

?>