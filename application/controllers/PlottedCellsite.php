<?php
class PlottedCellsite extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
        $this->load->model('PlottedCellsite_model');
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
		$this->load->view('Dashboard/PlottedCellsite',array('data' => $mydata)); 
		$this->load->view('layout/footer');
				
    }

	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}
	
    public function ajaxGetLaccellid()
	{
		echo "Success";
	}
    public function plotCellsite()
	{
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
		
        $this->load->library('form_validation');
        if($this->form_validation->run('plotCellsite') == FALSE)
		{
            $this->load->view('layout/header');
			$this->load->view('Dashboard/PlottedCellsite',array()); 
			$this->load->view('layout/footer');
        }
		else
		{
			// $operator	= @$requestDataArray['operator'];
			$operator	= @$_POST['operator'];
			$laccellid	= @$_POST['laccellid'];
			$bts 		= @$_POST['bts'];
			$lac		= @$_POST['lac'];
			$thana		= @$_POST['thana'];
			
			if($laccellid == NULL && $bts == NULL && $lac == NULL && $thana == NULL)
			{
				return false;
			}

			$retrivedData = $this->PlottedCellsite_model->getData($operator, $laccellid, $bts, $lac, $thana);
			
			// echo '<pre/>';
			// print_r($retrivedData);
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
			// return true;

			// echo '<pre/>';
			// print_r(json_encode($mine));
			// print_r($retrivedData);
			// die;


            // if($retrivedData)
			// {			
		
				// $this->load->view('layout/header');
				// $this->load->view('Dashboard/PlottedCellsite',array('data' => json_encode($dataArray))); 
				// $this->load->view('layout/footer');
				
				// // echo '<pre/>';
				// // print_r($sample);
				// // die;
            // }
			// else
			// {
				// $this->session->set_flashdata('error_msg','User name or Password did not matched!');
                // return redirect('PlottedCellsite/index');
            // }

        }

    }



}