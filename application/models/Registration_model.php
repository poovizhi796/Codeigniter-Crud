<?php

class Registration_model extends ci_model
{
	public function add($InsertData)
	{
		return $this->db->insert('tbl_reg', $InsertData);
	}
	/**
	 * get  all active records from table
	 * 
	 * return encodede array
	 */
	public function getAll()
	{
		return $this->db->get('tbl_reg')->result();
	}
}

?>
