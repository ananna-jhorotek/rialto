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
		
	public function getCellsite(){
	return $query = $this->db->get('tbl_cellsite');
		/*
		Here you should note i am returning 
		the query object instead of 
		$query->result() or $query->result_array()
		*/
	}
	
	public function bulkUpload($excelFile)
	{
		$enclose = '"';
		$delimiter = ",";
		$newline = "\r\n";
		// $this->db->insert_batch('tbl_cellsite',$dataArray);
		// return $this->db->affected_rows();
		$path = FCPATH;
		
		$path = (str_replace('\\','/',$path));	
		
		// echo $path;
		
		$SQL = "LOAD DATA INFILE '".$path."uploads/".$excelFile."' 
		INTO TABLE tbl_cellsite 
		FIELDS TERMINATED BY '".$delimiter."' 
		ENCLOSED BY '".$enclose."' 
		LINES TERMINATED BY '".$newline."' 
		IGNORE 1 ROWS
		(operator, site_name, lac_id, cell_name, cell_id, antenna_direction, cell_beamspan, cell_beamrange, latitude, longitude, site_address, union_ward, thana, district, division, bts_type, cell_type_2g_3g)
		SET laccellid = concat(lac_id,cell_id);";
		
		$query = $this->db->query($SQL);
		//return $query->result();
	}
	
	public function truncateCellsite(){
	$this->db->truncate('tbl_cellsite');
	}  
	
	public function batchInsertBackup()
	{		
		// $query = $this->db->get('tbl_cellsite');
		// foreach ($query->result() as $row) {
			  // $this->db->insert('tbl_cellsite_backup',$row);
		// }
		
		$enclose = '"';
		$delimiter = ",";
		$newline = "\r\n";
		// $this->db->insert_batch('tbl_cellsite',$dataArray);
		// return $this->db->affected_rows();
		$path = FCPATH;
		
		$path = (str_replace('\\','/',$path));	
		
		// echo $path;
		
		$SQL = "LOAD DATA INFILE '".$path."downloads/cellsite.csv' 
		INTO TABLE tbl_cellsite_backup 
		FIELDS TERMINATED BY '".$delimiter."' 
		ENCLOSED BY '".$enclose."' 
		LINES TERMINATED BY '".$newline."' 
		IGNORE 1 ROWS;";
		
		$query = $this->db->query($SQL);
	}
	
	public function truncateCellsiteBackup(){
	$this->db->truncate('tbl_cellsite_backup');
	} 
}