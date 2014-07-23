<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Base_model extends CI_MODEL
	{
		
		function get_fields($table)
		{
			$result = $this->db->list_fields($table);

			return $result;
		}

		function insert_data( $data, $table )
		{
			$this->db->insert($table, $data);
			return $this->db->affected_rows() > 0;
		}

		function update_data( $data, $table, $condition )
		{
			$this->db->where($condition);
			$this->db->update($table, $data);
			
			return $this->db->affected_rows() > 0;
		}

		function delete_data( $table, $condition )
		{
			$this->db->delete( $table, $condition );
			return $this->db->affected_rows() > 0;
		}

		function count_result( $condition, $table )
		{
			$this->db->where( $condition );
			return $this->db->count_all_results( $table );
		}

		function select_data( $table, $condition )
		{
			$query = $this->db->get_where( $table, $condition );
			return $query;
		}

	}
?>