<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Location_model extends Base_model
	{
		function select_for_field( $table, $field, $condition)
		{
			$this->db->select( $field );
			$this->db->from( $table );
			$this->db->where( $condition );
			$query = $this->db->get();
			return $query;
		}
	}

?>