<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Cedula1b_model extends Base_model
	{
		
		public $query;

		function get_data( $table, $condition )
		{
			$this->query = $this->db->get_where( $table, $condition );
			return $this->query;
		}
		
	}

?>