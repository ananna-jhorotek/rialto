<?php
class Admin extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
        $this->load->model('Admin_model');
        $this->load->model('settings_model');
        $this->load->model('request_model');
    }
	
    public function index(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/Admin_upload',array()); 
		$this->load->view('layout/footer');
    }
	
	public function downloadSampleCellsiteExcel()
    {
		$this->load->helper('download');

		$data = file_get_contents(base_url()."downloads/SampleCellsite.csv");
		$name = 'SampleCellsite.csv';

		force_download($name, $data);
	}
	
    public function crime(){		
		$this->load->view('layout/header');
		$this->load->view('admin/crimeupload',array()); 
		$this->load->view('layout/footer');
    }	
	
    public function crimedata(){
		
		
		$dataArray = array();
		
		$dataArray['crime_name'] = $_POST['crimename'];
		$dataArray['crime_details'] = $_POST['crimedetails'];
		
		$isExist = $this->Admin_model->isExist($_POST['crimename']);
		// print_r($isExist);
		// die;
		
		if($isExist != false)
		{
			$crimeid = $isExist->id;
		}
		else
		{
			$crimeid = $this->Admin_model->saveCrimeData($dataArray);
		}
		
                
            


        // $crimeid = $this->Admin_model->saveCrimeData($_POST['crimename']);
		
		// echo '<pre/>';
		// print_r($crimeid);
		// die;
		$subCrimeArrayStr = $_POST['subCrimeArray'];
		
		if(isset($_POST['subCrimeArray']))
		{
			$subCrimeArray = rtrim($subCrimeArrayStr,',');
			$subCrimeDataStrArray = explode(",",$subCrimeArray);
			
                        
                        
			$subCrimeDataArray = array();
			$count = 0;
			foreach($subCrimeDataStrArray as $subCrimeData)
			{
				$subCrimeDataArray[$count]['crimeid'] = $crimeid;
				$subCrimeDataArray[$count]['subcrime_name'] = $subCrimeData;
				$subCrimeDataArray[$count]['subcrime_details'] = '';
				$count++;
			}
			
//                        echo '<pre/>';
//                        print_r($subCrimeDataArray);
//                        die;
			
                        
			$subCrimeDataid = $this->Admin_model->saveSubCrimeData($subCrimeDataArray);
                        
                         
                        
                        $subCrimeDataArray = array();
			$count = 0;
			foreach($subCrimeDataStrArray as $subCrimeData)
			{
				$subCrimeDataArray[$count]['crimeid'] = $crimeid;
				$subCrimeDataArray[$count]['subcrime_name'] = $subCrimeData;
				$subCrimeDataArray[$count]['subcrime_details'] = '';
				$count++;
			}
		}
		
                
                $protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
                $base_url = $protocol . "://" . $_SERVER['HTTP_HOST'];
                $complete_url = $base_url . $_SERVER["REQUEST_URI"];
                $save_log = array(
                    'user_name' => $this->session->userdata('email'),
                    'user_id' => $this->session->userdata('user_id'),
                    'user_type' => $this->session->userdata('role_type'),
                    'activity_url' => $complete_url,
                    'action_type' => ' Crime & Sub Crime Create',
                    'activity_details' => 'Created  ' . 'Crime Name: ' . $_POST['crimename'].' '. ' Crime Details: '.$_POST['crimedetails'].'  '.'Sub Crime Name: ' .$_POST['subCrimeArray'],
                );
                $this->settings_model->save($save_log, 'log_details');
               			
		// print_r($subCrimeDataArray);
		// die;
		
		$this->load->view('layout/header');
		$this->load->view('admin/crimeupload',array()); 
		$this->load->view('layout/footer');
    }

	
	public function crimeupload()
	{
		
		// echo '<pre/>';
		// print_r($_FILES);
		// die;
		
		$numKeys = count($_FILES['gsmdata']['name']);
		$insertedData = "";//-------multiple upload----
		
		$this->load->library('MyExcel');

		
		$excelFile = $_FILES['gsmdata']['tmp_name'];

		try
		{
			$objPHPExcel = PHPExcel_IOFactory::load($excelFile);
		}
		catch(Exception $e)
		{
			$responseData = "errorFile";
			redirect('Admin/confirmation/'.$responseData);
		}
		
		// $sheetCount =  $objPHPExcel->getSheetCount();

		$sheetNameArray = $objPHPExcel->getSheetNames();
	
		$totalDataSheetWise = array();
		$subscribed_DNDArray = array();		
		
		$sheetCount = count($sheetNameArray);
		
		// $activeSheet = $objPHPExcel->setActiveSheetIndex(0)->toArray(null, true, true, true);
		
		// $indexRow = $activeSheet[1];
		// echo '<pre/>';
		// print_r($indexRow);
		// die;

		for($i=0; $i<$sheetCount; $i++)
		{
			$activeSheet = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
			
			$sheetName = $sheetNameArray[$i];
			$sheetName = strtolower($sheetName);
		
			// echo '<pre/>';
			// print_r($activeSheet);
			// die;
			
			$initialIndexRow = $activeSheet[1];

			$arrayFormat = Array
			(
				'A' => 'OPERATOR',
				'B' => 'SITE_NAME',
				'C' => 'LAC_ID',
				'D' => 'CELL_NAME',
				'E' => 'CELL_ID'
			);
			
			
			// echo '<pre/>';
			// print_r($initialIndexRow);
			// print_r($arrayFormat);
			// die;
			
			//Checking if there is all valid information
			$arraysAreEqual = ($arrayFormat === $initialIndexRow);
			if($arraysAreEqual != true)
			{
				// die('LOL');
				$responseData = 'wrongFormat';
				redirect('Admin/confirmation/'.$responseData);
			}
			
			
			echo '<pre/>';
			print_r($initialIndexRow);
			print_r($arrayFormat);
			die;
			
			$sheetNameArray = $objPHPExcel->getSheetNames();
			$row = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
			
			
			$startingDataRow = 2;
			$counter = 0;			
			$highestRowNumber = $objPHPExcel->setActiveSheetIndex($i)->getHighestRow();

			for($j=$startingDataRow; $j<=$highestRowNumber; $j++)
			{
				$datamRow = $activeSheet[$j];
				foreach($datamRow as $key => $value)
				{
					// echo '<pre/>';
					if(($initialIndexRow[$key] == 'CELL_BEAMRANGE') && ($value == NULL))
					{
						$value = '1000';//Here will come calculated value of CELL_BEAMRANGE
					}
					
					// print_r($initialIndexRow[$key]);
					// print_r("++++");
					// echo var_dump($value);
					
					// if($value == NULL)
					// {
						// // die('LOL');
						// $responseData = 'dataMissing';						
						// redirect('Admin/confirmation/'.$responseData);
					// }
					$dataRow[strtolower($initialIndexRow[$key])] = $value;
					// $dataRow['laccellid'] = $initialIndexRow['C'][$value];
					
					
				}
				$dataRow['laccellid'] = $dataRow['lac_id'].$dataRow['cell_id'];
				// $dataRow['operator'] = $sheetName;
				// print_r($dataRow);
				// die;
				// $myRow[$i][$counter] = $dataRow;//Sheetwiese multidimention array	
				$dataArray[] = $dataRow;//All data in a single array
				$counter++;					
			}
		}
		
		// echo "<pre>";
		// print_r($dataArray);
		// die();
		
		if(!empty($dataArray))
		{
			$response = $this->Admin_model->batchInsert($dataArray);
			// $data = array();
		}
		
		// echo var_dump($response);
		// die;

		if($response > 0)
		{
			$responseData = 'successful';
			redirect('Admin/confirmation/'.$responseData);
		}
		else
		{
			$responseData = "failed";
			redirect('Admin/confirmation/'.$responseData);
		}

		
	}

	
	public function upload()
	{
		
		// echo '<pre/>';
		// print_r($_FILES);
		// die;
		
		$numKeys = count($_FILES['gsmdata']['name']);
		$insertedData = "";//-------multiple upload----
		
		$this->load->library('MyExcel');

		
		$excelFile = $_FILES['gsmdata']['tmp_name'];

		try
		{
			$objPHPExcel = PHPExcel_IOFactory::load($excelFile);
		}
		catch(Exception $e)
		{
			$responseData = "errorFile";
			redirect('Admin/confirmation/'.$responseData);
		}
		
		// $sheetCount =  $objPHPExcel->getSheetCount();

		$sheetNameArray = $objPHPExcel->getSheetNames();
	
		$totalDataSheetWise = array();
		$subscribed_DNDArray = array();		
		
		$sheetCount = count($sheetNameArray);
		
		// $activeSheet = $objPHPExcel->setActiveSheetIndex(0)->toArray(null, true, true, true);
		
		// $indexRow = $activeSheet[1];
		// echo '<pre/>';
		// print_r($indexRow);
		// die;

		for($i=0; $i<$sheetCount; $i++)
		{
			$activeSheet = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
			
			$sheetName = $sheetNameArray[$i];
			$sheetName = strtolower($sheetName);
		
			// echo '<pre/>';
			// print_r(strtolower($sheetName));
			// die;
			
			$initialIndexRow = $activeSheet[1];

			$arrayFormat = Array
			(
				'A' => 'OPERATOR',
				'B' => 'SITE_NAME',
				'C' => 'LAC_ID',
				'D' => 'CELL_NAME',
				'E' => 'CELL_ID',
				'F' => 'ANTENNA_DIRECTION',
				'G' => 'CELL_BEAMSPAN',
				'H' => 'CELL_BEAMRANGE',
				'I' => 'LATITUDE',
				'J' => 'LONGITUDE',
				'K' => 'SITE_ADDRESS',
				'L' => 'UNION_WARD',
				'M' => 'THANA',
				'N' => 'DISTRICT',
				'O' => 'DIVISION',
				'P' => 'BTS_TYPE',
				'Q' => 'CELL_TYPE_2G_3G'
			);
			
			
			// echo '<pre/>';
			// print_r($initialIndexRow);
			// print_r($arrayFormat);
			// die;
			
			//Checking if there is all valid information
			$arraysAreEqual = ($arrayFormat === $initialIndexRow);
			if($arraysAreEqual != true)
			{
				// die('LOL');
				$responseData = 'wrongFormat';
				redirect('Admin/confirmation/'.$responseData);
			}
			
			
			// echo '<pre/>';
			// print_r($initialIndexRow);
			// print_r($arrayFormat);
			// die;
			
			$sheetNameArray = $objPHPExcel->getSheetNames();
			$row = $objPHPExcel->setActiveSheetIndex($i)->toArray(null, true, true, true);
			
			
			$startingDataRow = 2;
			$counter = 0;			
			$highestRowNumber = $objPHPExcel->setActiveSheetIndex($i)->getHighestRow();

			for($j=$startingDataRow; $j<=$highestRowNumber; $j++)
			{
				$datamRow = $activeSheet[$j];
				foreach($datamRow as $key => $value)
				{
					// echo '<pre/>';
					if(($initialIndexRow[$key] == 'CELL_BEAMRANGE') && ($value == NULL))
					{
						$value = '1000';//Here will come calculated value of CELL_BEAMRANGE
					}
					
					// print_r($initialIndexRow[$key]);
					// print_r("++++");
					// echo var_dump($value);
					
					// if($value == NULL)
					// {
						// // die('LOL');
						// $responseData = 'dataMissing';						
						// redirect('Admin/confirmation/'.$responseData);
					// }
					$dataRow[strtolower($initialIndexRow[$key])] = $value;
					// $dataRow['laccellid'] = $initialIndexRow['C'][$value];
					
					
				}
				$dataRow['laccellid'] = $dataRow['lac_id'].$dataRow['cell_id'];
				// $dataRow['operator'] = $sheetName;
				// print_r($dataRow);
				// die;
				// $myRow[$i][$counter] = $dataRow;//Sheetwiese multidimention array	
				$dataArray[] = $dataRow;//All data in a single array
				$counter++;					
			}
		}
		
		// echo "<pre>";
		// print_r($dataArray);
		// die();
		
		if(!empty($dataArray))
		{
			$response = $this->Admin_model->batchInsert($dataArray);
			// $data = array();
		}
		
		// echo var_dump($response);
		// die;

		if($response > 0)
		{
			$responseData = 'successful';
			redirect('Admin/confirmation/'.$responseData);
		}
		else
		{
			$responseData = "failed";
			redirect('Admin/confirmation/'.$responseData);
		}

		
	}

	
    public function confirmation($response){
		
		if($response == 'successful')
		{
			$responseData = 'successful : Successfully Inserted';
		}
		elseif($response == 'errorFile')
		{
			$responseData = "errorFile : Error Loading Excel File";
		}
		elseif($response == 'dataMissing')
		{
			$responseData = "dataMissing : Info Not Provided by Operator";
		}
		elseif($response == 'wrongFormat')
		{
			$responseData = "wrongFormat : Wrong Format in Excel File";
		}
		else
		{
			$responseData = "Failed to inserted data";
		}	
		$this->load->view('layout/header');
		$this->load->view('Dashboard/Admin_confirmation',array('responseData' => $responseData)); 
		$this->load->view('layout/footer');
    }
    
    
    function new_request_details() {
        $data['main_content'] = 'admin/request/new_request_details';
        $this->load->view('includes/template', $data);
    }   
    function ajax_new_request_data() {   
        $target_number=$this->input->post('target_number');
        $request_by=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');    
        $data['search_datas'] = $this->request_model->get_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date);    
        $this->load->view('admin/request/ajax_new_request_page',$data);
    }    
    function ajax_new_request_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('admin/request/ajax_new_request_id_wise_details',$data);
    }
    function pending_request_details() {
        $data['main_content'] = 'admin/request/pending_request_details';
        $this->load->view('includes/template', $data);
    }
     function ajax_pending_request_data() {         
        $target_number=$this->input->post('target_number');
        $request_date=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');         
        $data['search_datas'] = $this->request_model->get_admin_dash_pending_request_data($target_number,$request_date,$crime_type,$start_date,$end_date);    
        $this->load->view('admin/request/ajax_pending_request_page',$data);
    }
    function ajax_pending_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('admin/request/ajax_pending_request_id_wise_details',$data);
    }
    function completed_request_details() {
        $data['main_content'] = 'admin/request/completed_request_details';
        $this->load->view('includes/template', $data);
    }
     function ajax_completed_request_data() {
         
        $target_number=$this->input->post('target_number');
        $request_date=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');        
        $data['search_datas'] = $this->request_model->get_completed_request_data($target_number,$request_date,$crime_type,$start_date,$end_date);    
        //var_dump($data['search_datas']);die;
        $this->load->view('admin/request/ajax_completed_request_page',$data);
    }
    function ajax_completed_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        //var_dump($end_date);die;
        $data['search_datas'] = $this->request_model->get_id_wise_completed_request_data($transaction_id);    
        //var_dump($data['search_datas']);die;
        $this->load->view('admin/request/ajax_completed_request_id_wise_details',$data);
    }
}