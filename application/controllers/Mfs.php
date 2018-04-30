<?php
class Mfs extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
        $this->load->model('Login_m');
        $this->load->model('Mfs_model');
    }
	
    public function index(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/InfoRequest_operator',array()); 
		$this->load->view('layout/footer');
    }
	
    public function dashboard(){		
		$this->load->view('layout/header');
		$this->load->view('Mfs/dashboard',array()); 
		$this->load->view('layout/footer');
    }
	
	
	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}
	
	
    public function request(){
		
		
		
		// $requestData = file_get_contents("php://input");
		// $requestDataObj = json_decode($requestData);
		// $requestDataArray = (array)$requestDataObj;
		// $_POST[] = $_POST['reason_crime_subtype'];
		$requestDataArray = $_POST;
		
		
		$user_generated_by = $this->session->userdata('user_id');
		$user_generated_by = $this->session->userdata('user_id');
		$user_designation = $this->session->userdata('rank');
		$user_appointment = $this->session->userdata('apt_name');
		$user_placement = $this->session->userdata('battalion');
		
		$one = 1;
		
		$requestDataArray['request_id'] = $this->udate('YmdHisu');
		$requestDataArray['transacttion_id'] = $this->udate('YmdHisu');
		$requestDataArray['user_generated_by'] = $user_generated_by;
		$requestDataArray['user_designation'] = $user_designation;
		$requestDataArray['user_appointment'] = $user_appointment;
		$requestDataArray['user_placement'] = $user_placement;
		// $requestDataArray['user_generated_by'] = $one;
		// $requestDataArray['user_designation'] = $one;
		// $requestDataArray['user_appointment'] = $one;
		// $requestDataArray['user_placement'] = $one;
		$requestDataArray['date_requested'] = date('Y-m-d');;
		// $requestDataArray['request_status'] = '';
		// $requestDataArray['target_device'] = '';
		$requestDataArray['last_status'] = '';
		$requestDataArray['last_updated_by'] = $user_generated_by;
		
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		
		// $requestData = file_get_contents("php://input");
		// $store_path = 'logs\\info_request\\';
		// $name = date('Y-m-d');
		// if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		// $myTimeStamp = $this->udate('YmdHisu');
		// $myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
		
		
		// $logString 	='requestData = ' . $requestData. PHP_EOL; 
		// $logString .= PHP_EOL; 
		// $logString .='GET = ' . json_encode($_GET). PHP_EOL; 
		// $logString .= PHP_EOL; 	
		// $logString .='POST = ' . json_encode($_POST). PHP_EOL; 
		// $logString .= PHP_EOL; 		
		// $logString .='POST = ' . json_encode($requestDataArray). PHP_EOL; 
		// $logString .= PHP_EOL; 		
		// $myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		// fwrite($myfile, $logString);
		// fclose($myfile);
		
		$this->InfoRequest_model->storeLogs($requestDataArray);	
		
		if($_POST['msisdn'])
		{
			// $this->InfoRequest_model->getData($requestDataArray['msisdn']);	
			$isDndListed = $this->InfoRequest_model->getData($_POST['msisdn']);	
			
			// echo '<pre/>';
			// print_r($isDndListed['name']);
				
			$requestData = file_get_contents("php://input");
			$store_path = 'emailLogs\\'.$isDndListed['name'].'\\';
			$name = date('Y-m-d');
			if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
			$myTimeStamp = $this->udate('YmdHisu');
			$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
			
			
			$logString .='POST = ' . json_encode($_POST). PHP_EOL; 
			$logString .= PHP_EOL; 		
			$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
			fwrite($myfile, $logString);
			fclose($myfile);
				
			$requestData = file_get_contents("php://input");
			$store_path = 'smsLogs\\'.$isDndListed['name'].'\\';
			$name = date('Y-m-d');
			if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
			$myTimeStamp = $this->udate('YmdHisu');
			$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
			
			
			$logString .='POST = ' . json_encode($_POST). PHP_EOL; 
			$logString .= PHP_EOL; 		
			$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
			fwrite($myfile, $logString);
			fclose($myfile);
			
			
		}
		// $insert_id = $this->db->insert_id();
		
		// print_r($inserted_id);
		
		// echo $this->db->last_query();
		return true;
    }
	
    public function operator(){
		
		// echo $this->session->userdata['user_id'];
		// die;
		if($_POST['userid']){
			$jsonobj = json_encode($_POST);
			// $this->InfoRequest_model->insertrequest($jsonobj);
		}
		

	
		$this->load->view('layout/header');
		$this->load->view('Dashboard/InfoRequest_operator',array()); 
		$this->load->view('layout/footer');
    }
	
    public function mfs(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/InfoRequest_mfs',array()); 
		$this->load->view('layout/footer');
    }
	
    public function myrequest(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/InfoRequest_myrequest',array()); 
		$this->load->view('layout/footer');
    }

}