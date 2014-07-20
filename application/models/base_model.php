<?php 

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

	}
?>