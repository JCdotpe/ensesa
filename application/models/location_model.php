<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Location_model extends Base_model
	{
		function select_for_field( $table, $field, $condition)
		{
			$this->db->distinct();
			$this->db->select( $field . ' AS search_column ' );
			$this->db->from( $table );
			$this->db->group_by( $field );
			$this->db->where( $condition );
			$query = $this->db->get();
			return $query;
		}
	}

?>