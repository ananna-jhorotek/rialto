<?php
class CellTriangulation extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
        $this->load->model('CellTriangulation_model');
    }
	
    public function index(){		
	
		$retrivedData[]['cell_id']		= '1116';				
		// $retrivedData[]['latitude']		= '23.8938';
		// $retrivedData[]['longitude']	= '90.6703';
		$retrivedData[]['operator']		= 'BL';
		// $retrivedData = '[{"site_name":"DHK_U1992","id":1,"lac_cell_id":"7509919","cell_type_2g_3g":"3G","_state":{"db":"default","adding":false},"lac_id":"750", "union_ward": "Bhatara", "cell_id": "9919", "district": "Dhaka", "site_address": "House:14, Road:33, Gulshan-1, Dhaka", "sr_n": 18834, "antenna_direction": 350.0, "operator": "gp", "latitude": "23.733951", "bts_type": "Regular", "longitude": "90.502018", "division": "Dhaka", "cell_name": "DHK_U1992_3", "cell_beamrange": 500.0, "thana": "Badda"}]';
		
		$mydata = json_encode($retrivedData);
		// die;

		$this->load->view('layout/header');
		// $this->load->view('Dashboard/PlottedCellsite',array('data'=>'[{"site_name":"DHK_U1992","id":1,"lac_cell_id":"7509919","cell_type_2g_3g":"3G","_state":{"db":"default","adding":false},"lac_id":"750", "union_ward": "Bhatara", "cell_id": "9919", "district": "Dhaka", "site_address": "House:14, Road:33, Gulshan-1, Dhaka", "sr_n": 18834, "antenna_direction": 350.0, "operator": "BL", "latitude": "23.78665", "bts_type": "Regular", "longitude": "90.41448", "division": "Dhaka", "cell_name": "DHK_U1992_3", "cell_beamrange": 1000.0, "thana": "Badda"}]')); 
		// $this->load->view('Dashboard/PlottedCellsite',array('data' => json_encode($retrivedData))); 
		$this->load->view('Dashboard/CellTriangulation',array('data' => $mydata)); 
		$this->load->view('layout/footer');
    }
	
	
	
	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}
	
	
    public function operator(){

		$requestData = file_get_contents("php://input");
		$requestDataObj = json_decode($requestData);
		$requestDataArray = (array)$requestDataObj;
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		// $requestData = file_get_contents("php://input");
		// $store_path = 'logs\\';
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
		// $myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		// fwrite($myfile, $logString);
		// fclose($myfile);

		// $operator	= @$requestDataArray['operator'];
		// $cellidarray	= @$requestDataArray['cellidarray'];
			$operator		= @$_POST['operator'];
			$cellidString 	= @$_POST['cellid'];
			
			
			$cellidArrayString = rtrim($cellidString,',');
			$cellidarray = explode(',', $cellidArrayString);
			
			$retrivedData = $this->CellTriangulation_model->getDataByOperator($operator,$cellidarray);
			
			// echo $cellidarray;
			// echo $this->db->last_query();
			// die;
			
			
			
			// $latitude 		= $retrivedData['latitude'];
			// $longitude 		= $retrivedData['longitude'];
			// $site_name 		= $retrivedData['site_name'];
			// $site_address 	= $retrivedData['site_address'];
			// $cell_id 		= $retrivedData['cell_id'];
			// $site_address 	= $retrivedData['site_address'];
			// $site_address 	= $retrivedData['site_address'];
			
			$dataArray = $retrivedData;
			
			echo json_encode($dataArray);
	
		// $this->load->view('layout/header');
		// $this->load->view('Dashboard/CellTriangulation_operator',array()); 
		// $this->load->view('layout/footer');
    }
	
	
	
    public function crimescene(){	

		$requestData = file_get_contents("php://input");
		$requestDataObj = json_decode($requestData);
		$requestDataArray = (array)$requestDataObj;
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		$requestData = file_get_contents("php://input");
		$store_path = 'logs\\';
		$name = date('Y-m-d');
		if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
		$myTimeStamp = $this->udate('YmdHisu');
		$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
		
		
		$logString 	='requestData = ' . $requestData. PHP_EOL; 
		$logString .= PHP_EOL; 
		$logString .='GET = ' . json_encode($_GET). PHP_EOL; 
		$logString .= PHP_EOL; 	
		$logString .='POST = ' . json_encode($_POST). PHP_EOL; 
		$logString .= PHP_EOL; 		
		$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		fwrite($myfile, $logString);
		fclose($myfile);

			$area_range			= @$_POST['area_range'];
			$thana 			= @$_POST['thana'];
			$latitude 		= @$_POST['latitude'];
			$longitude 		= @$_POST['longitude'];

			// $thana 			= @$requestDataArray['thana'];
			// $area_range			= @$requestDataArray['area_range'];
			// $latitude 		= @$requestDataArray['latitude'];
			// $longitude 		= @$requestDataArray['longitude'];
			
			if(($area_range == NULL) && ($thana == NULL) && ($longitude == NULL) && ($latitude == NULL))
			{
				return false;
			}
			else if(($thana != NULL) && ($area_range == NULL) && ($longitude == NULL) && ($latitude == NULL))
			{
				$thana = rtrim($thana,',');
				$thana = explode(',', $thana);
				
				die("Searching by thana");
				$retrivedData = $this->CellTriangulation_model->getDataByThana($thana, $area_range, $latitude, $longitude);
				return false;
			}
			else{
				// die("There");
				$retrivedData = $this->CellTriangulation_model->getDataByArea($area_range, $latitude, $longitude);
			}
			
			// echo $this->db->last_query();
			// print_r($retrivedData);
			// die;
			
			// $retrivedData = $this->CellTriangulation_model->getDataByThana($thana, $area_range, $latitude, $longitude);
			
			
				
			$store_path = 'logs\\';
			$name = date('Y-m-d');
			if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
			$myTimeStamp = $this->udate('YmdHisu');
			$myFileName = $myTimeStamp . ' - '. ' - '.'.txt';
			
			$query = $this->db->last_query();
			$logString ='_POST = ' . json_encode($_POST). PHP_EOL; 
			$logString .= PHP_EOL; 
			$logString .='query = ' . $query . PHP_EOL; 
			$logString .= PHP_EOL; 	
			$logString .='data = ' . json_encode($retrivedData). PHP_EOL; 
			$logString .= PHP_EOL; 		
			$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
			fwrite($myfile, $logString);
			fclose($myfile);
			
			
			// $latitude 		= $retrivedData['latitude'];
			// $longitude 		= $retrivedData['longitude'];
			// $site_name 		= $retrivedData['site_name'];
			// $site_address 	= $retrivedData['site_address'];
			// $cell_id 		= $retrivedData['cell_id'];
			// $site_address 	= $retrivedData['site_address'];
			// $site_address 	= $retrivedData['site_address'];
			
			if($retrivedData == false)
			{
				return false;
			}
			
			$dataArray = $retrivedData;
			
			echo json_encode($dataArray);
	
		// $this->load->view('layout/header');
		// $this->load->view('Dashboard/CellTriangulation_operator',array()); 
		// $this->load->view('layout/footer');
    }
	
	
	
    public function searchThana(){	

		$requestData = file_get_contents("php://input");
		$requestDataObj = json_decode($requestData);
		$requestDataArray = (array)$requestDataObj;
		// echo '<pre/>';
		// print_r($requestDataArray);
		// die;
		
		// $requestData = file_get_contents("php://input");
		// $store_path = 'logs\\';
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
		// $myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
		// fwrite($myfile, $logString);
		// fclose($myfile);

			$area_range			= @$_POST['area_range'];
			$thana 			= @$_POST['thana'];
			$latitude 		= @$_POST['latitude'];
			$longitude 		= @$_POST['longitude'];

			// $thana 			= @$requestDataArray['thana'];
			// $area_range			= @$requestDataArray['area_range'];
			// $latitude 		= @$requestDataArray['latitude'];
			// $longitude 		= @$requestDataArray['longitude'];
			
			if(($area_range == NULL) && ($thana == NULL) && ($longitude == NULL) && ($latitude == NULL))
			{
				return false;
			}
			else if(($thana != NULL) && ($area_range == NULL) && ($longitude == NULL) && ($latitude == NULL))
			{
				$thana = rtrim($thana,',');
				$thana = explode(',', $thana);
				
				$retrivedData = $this->CellTriangulation_model->getDataByThana($thana);
				// return false;
			}
			else{
				// die("There");
				$retrivedData = $this->CellTriangulation_model->getDataByArea($area_range, $latitude, $longitude);
			}
			
			// echo $this->db->last_query();
			// print_r($retrivedData);
			// die;
			
			// $retrivedData = $this->CellTriangulation_model->getDataByThana($thana, $area_range, $latitude, $longitude);
			
			
				
			$store_path = 'logs\\';
			$name = date('Y-m-d');
			if(!is_dir($store_path.$name)) mkdir($store_path.$name, 0777, true);
			$myTimeStamp = $this->udate('YmdHisu');
			$myFileName = $myTimeStamp . ' ----------- '. ' - '.'.txt';
			
			$query = $this->db->last_query();
			$logString ='_POST = ' . json_encode($_POST). PHP_EOL; 
			$logString .= PHP_EOL; 
			$logString .='query = ' . $query . PHP_EOL; 
			$logString .= PHP_EOL; 	
			$logString .='data = ' . json_encode($retrivedData). PHP_EOL; 
			$logString .= PHP_EOL; 		
			$myfile = fopen($store_path.$name.'\\'.$myFileName, "a") or die ("Unable to open file!");
			fwrite($myfile, $logString);
			fclose($myfile);
			
			
			// $latitude 		= $retrivedData['latitude'];
			// $longitude 		= $retrivedData['longitude'];
			// $site_name 		= $retrivedData['site_name'];
			// $site_address 	= $retrivedData['site_address'];
			// $cell_id 		= $retrivedData['cell_id'];
			// $site_address 	= $retrivedData['site_address'];
			// $site_address 	= $retrivedData['site_address'];
			
			if($retrivedData == false)
			{
				return false;
			}
			
			$dataArray = $retrivedData;
			
			echo json_encode($dataArray);
	
		// $this->load->view('layout/header');
		// $this->load->view('Dashboard/CellTriangulation_operator',array()); 
		// $this->load->view('layout/footer');
    }
	
	

    public function post_login()
	{
        $this->load->library('form_validation');
        if($this->form_validation->run('login_form') == FALSE)
		{
            $this->load->view('admin/login');
        }
		else
		{			
			$email=$this->input->post('EmailInput');
			$password=$this->input->post('PasswordInput');

			$user_id = $this->Login_m->login_valid($email,md5($password));

            if($user_id){
                $this->session->set_userdata('user_id', $user_id);

                $this->session->set_flashdata('success_msg','Login Success');
                return redirect('dashboard');

            }
			else
			{
				$this->session->set_flashdata('error_msg','User name or Password did not matched!');
                $this->load->view('admin/login');
            }

        }

    }



}
?>