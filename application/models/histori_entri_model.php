<?php
class Histori_Entri_Model extends CI_Model
{
	var $table  = 'histori_entri';
	var $key  = 'id_histori_entri';
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