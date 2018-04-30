<?php
class RequestLogs extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
        $this->load->model('Login_m');
        $this->load->model('RequestLogs_model');
    }
	
    public function storeLogs(){
		
		$user_id = $this->session->userdata('user_id');
		// $user_id = 1;

		$currentURL = current_url(); //for simple URL
		$params = $_SERVER['QUERY_STRING']; //for parameters
		
		if($params){
			$fullURL = $currentURL . '?' . $params; //full URL with parameter
		}
		else
		{
			$fullURL = $currentURL;
		}
 
 
		$requestDataArray = $_POST;
		$requestDataArray['user_id'] = $user_id;
		$requestDataArray['source_url'] = $fullURL;
		// $requestData = file_get_contents("php://input");
		// $requestDataObj = json_decode($requestData);
		// $requestDataArray = (array)$requestDataObj;
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		unset($requestDataArray['user_designation']); 
		
		
		$requestData = file_get_contents("php://input");
		$store_path = 'logs\\requestLogs\\';
		$name = date('Y-m-d');
		if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		$myTimeStamp = $this->udate('YmdHisu');
		$myFileName = $myTimeStamp . ' - mine'. ' - '.'.txt';		
		
		// $logString 	='requestData = ' . json_encode($requestDataArray). PHP_EOL; 
		// $logString .= PHP_EOL; 
		// $logString .='GET = ' . json_encode($_GET). PHP_EOL; 
		// $logString .= PHP_EOL; 	
		$logString  ='POST = ' . json_encode($requestDataArray). PHP_EOL; 
		$logString .= PHP_EOL; 		
		$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		fwrite($myfile, $logString);
		fclose($myfile);		
		
		
		$this->RequestLogs_model->storeLogs($requestDataArray);	
		
		// echo $this->db->last_query();
		return $this->db->insert_id();
    }
	
    public function storeActivitesLogs(){
		
		$user_id = $this->session->userdata('user_id');

		$currentURL = current_url(); //for simple URL
		$params = $_SERVER['QUERY_STRING']; //for parameters
		
		if($params){
			$fullURL = $currentURL . '?' . $params; //full URL with parameter
		}
		else
		{
			$fullURL = $currentURL;
		}
 
 
		$requestDataArray['data'] = json_encode($_POST);
		$requestDataArray['date'] = date('Y-m-d H:i:s');
		$requestDataArray['request_by'] = $user_id;
		// $requestDataArray['request_url'] = $_POST['request_url'];
		// $requestData = file_get_contents("php://input");
		// $requestDataObj = json_decode($requestData);
		// $requestDataArray = (array)$requestDataObj;
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		unset($requestDataArray['user_designation']); 
		
		
		$requestData = file_get_contents("php://input");
		$store_path = 'logs\\requestLogs\\';
		$name = date('Y-m-d');
		if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		$myTimeStamp = $this->udate('YmdHisu');
		$myFileName = $myTimeStamp . ' - mine'. ' - '.'.txt';		
		
		// $logString 	='requestData = ' . json_encode($requestDataArray). PHP_EOL; 
		// $logString .= PHP_EOL; 
		// $logString .='GET = ' . json_encode($_GET). PHP_EOL; 
		// $logString .= PHP_EOL; 	
		$logString  ='POST = ' . json_encode($requestDataArray). PHP_EOL; 
		$logString .= PHP_EOL; 		
		$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		fwrite($myfile, $logString);
		fclose($myfile);		
		
		
		$this->RequestLogs_model->storeActivitesLogs($requestDataArray);	
		
		// echo $this->db->last_query();
		return $this->db->insert_id();
    }
	
	
	
	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}
	
	

}
?>