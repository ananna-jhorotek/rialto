<?php

class Admin_model extends CI_Model{

    public function batchInsert($dataArray)
	{
		$this->db->insert_batch('tbl_cellsite',$dataArray);
		return $this->db->affected_rows();
	}
	
	public function saveCrimeData($data)
	{
		$this->db->insert('tbl_crimeinfo', $data);
		return $this->db->insert_id();
	}
	
	// public function saveSubCrimeData($data)
	// {
		// $this->db->insert('tbl_subcrimeinfo', $data);
		// return $this->db->insert_id();
	// }
	public function saveSubCrimeData($dataArray)
	{
		$this->db->insert_batch('tbl_subcrimeinfo',$dataArray);
		return $this->db->affected_rows();
	}
	
	
	public function isExist($crimename)
	{
		$this->db->from('tbl_crimeinfo');
		$this->db->where('crime_name',$crimename);
		$query = $this->db->get();

		if( $query->num_rows() == 0 )
		{
			return FALSE;
		}
		else
		{
			return $query->row();
		}
	}
}