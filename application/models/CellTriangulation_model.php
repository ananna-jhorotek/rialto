<?php
/**
 * Created by PhpStorm.
 * User: Shamim Ahammed
 * Date: 20-11-2017
 * Time: 2:17 PM
 */
class CellTriangulation_model extends CI_Model{
	
	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}

	public function getDataByOperator($operator,$cellidarray)
	{
		$this->db->select('tbl_cellsite.*');
		$this->db->from('tbl_cellsite');
		
		if($cellidarray)
		{
			$this->db->or_where_in('cell_id', $cellidarray);
		}
		
		
        $this->db->limit('1000');
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
	
	
	function distance($lat1, $lon1, $lat2, $lon2, $unit){

		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		$unit = strtoupper($unit);

		if ($unit == "K") {
			return ($miles * 1.609344);
		} else if ($unit == "N") {
			return ($miles * 0.8684);
		} else {
			return $miles;
		}
	}
	
	
	public function getDataByArea($area_range, $latitude, $longitude)
	{
		$this->db->select('tbl_cellsite.*');
		$this->db->from('tbl_cellsite');
		$resultArray = $this->db->get()->result_array();
		
		$myArray = array();
		foreach($resultArray as $result){
			$storedlatitude = $result['latitude'];
			$storedlongitude = $result['longitude'];
			
			$calculatedDistance = $this->distance($latitude, $longitude, $storedlatitude, $storedlongitude, "K") . " Kilometers<br>";
			
			
			if(intval($area_range/1000) >= intval($calculatedDistance)){
				// echo 'Inside';
				$myArray[] = $result;
			}
			else
			{
				// echo 'Outside';
			}
			
			// echo '<pre/>';
			// print_r($result);
			// echo '<pre/>';
			// print_r($area_range);
			// echo '<pre/>';
			// print_r($calculatedDistance);
			// echo '<pre/>';
			// print_r($myArray);
			
			// die('@104');
			
		}
		
		if($myArray == NULL){
			return false;
		}
			
	
		// echo '<pre/>area_range';
		// print_r($area_range);
		// echo '<pre/>calculatedDistance';
		// print_r($calculatedDistance);
		// echo '<pre/>';
		// print_r($myArray);
		
		// die('Inside');
			
			
				
			// $store_path = 'logs\\';
			// $name = date('Y-m-d');
			// if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
			// $myTimeStamp = $this->udate('YmdHisu');
			// $myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
			
			
			// $logString ='data = ' . json_encode($myArray). PHP_EOL; 
			// $logString .= PHP_EOL; 		
			// $myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
			// fwrite($myfile, $logString);
			// fclose($myfile);
			
			
		// print_r($myArray);
		return $myArray;
		
		
	}
	
	public function getDataByThana($thana)
	{
		
		$this->db->select('tbl_cellsite.*');
		$this->db->from('tbl_cellsite');
		if($thana)
		{
			// $this->db->like('tbl_cellsite.thana',$thana);
			$this->db->or_where_in('thana', $thana);
		}
		else
		{
			return false;
		}

		$resultArray = $this->db->get()->result_array();
		
		// echo $this->db->last_query();
		// die;
			
		$store_path = 'logs\\';
		$name = date('Y-m-d');
		if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		$myTimeStamp = $this->udate('YmdHisu');
		$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
		
		
		$logString ='data = ' . json_encode($resultArray). PHP_EOL; 
		$logString .= PHP_EOL; 		
		$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		fwrite($myfile, $logString);
		fclose($myfile);
		
			
		// print_r($myArray);
		return $resultArray;
		
		
	}
}