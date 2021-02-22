<?php
class Terdiri_Dari_Model extends CI_Model
{
	var $table  = 'terdiri_dari';
	var $key  = 'id_template';
	function __construct()
    {
        parent::__construct();
    }
	
	function save($id = "",$data = array(), $insert_id = false)
	{
		
		if (!empty($id))
		{
			$this->db->where($this->key, $id);
			$this->db->update($this->table, $data);
		}
		else
		{
			$this->db->insert($this->table, $data);
		}
		
		return $this->db->affected_rows();
	}
}