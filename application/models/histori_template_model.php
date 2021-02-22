<?php
class Histori_Template_Model extends CI_Model
{
	var $table  = 'histori_template';
	var $key  = 'id_histori_template';
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