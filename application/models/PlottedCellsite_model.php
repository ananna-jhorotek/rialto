<?php
/**
 * Created by PhpStorm.
 * User: Shamim Ahammed
 * Date: 20-11-2017
 * Time: 2:17 PM
 */
class PlottedCellsite_model extends CI_Model{
	
	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}

	public function getData($laccellid,$bts,$lac,$thana)
	{
		$this->db->select('tbl_cellsite.*');
		$this->db->from('tbl_cellsite');
		
		if($laccellid)
		{
			$this->db->where('tbl_cellsite.laccellid', $laccellid);
		}
		
		if($bts)
		{
			$this->db->where('tbl_cellsite.site_name', $bts);
		}
		
		if($lac)
		{
			$this->db->like('tbl_cellsite.lac_id',$lac);
		}
		
		if($thana)
		{
			$this->db->like('tbl_cellsite.thana',$thana);
		}
		
        $this->db->limit('1000');
        $this->db->order_by('tbl_cellsite.antenna_direction','asc');
		// $this->db->order_by('Date(`subscriptions.subscription_date`)');

		$result = $this->db->get();
		
		// echo $this->db->last_query();
		// die;	
		
	
		$store_path = 'logs\\';
		$name = date('Y-m-d');
		if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		$myTimeStamp = $this->udate('YmdHisu');
		$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
		
		
		$logString ='last_query = ' . json_encode($this->db->last_query()). PHP_EOL; 
		$logString .= PHP_EOL; 
		$logString .='data = ' . json_encode($result->result_array()). PHP_EOL; 
		$logString .= PHP_EOL; 		
		$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		fwrite($myfile, $logString);
		fclose($myfile);
		
		
        if( $result->num_rows() == 0 ) 
		{
			return False; //no subs data found
		}
		else
		{
			return $result->result_array();
		}
	}
}