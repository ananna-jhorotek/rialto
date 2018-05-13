<?php
class Reports extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
        $this->load->model('Reports_model');
        $this->load->model('settings_model');
    }
	
    public function index(){	
		$this->load->view('layout/header');
		$this->load->view('Dashboard/requestLogs',array('data' => $mydata)); 
		$this->load->view('layout/footer');				
    }
	
    public function getUserAjax(){
		
		$id = $_POST['id'];
		
		if($id){
			
			$parentInfo = $this->Reports_model->getParentById($id);	
			$user_id = $parentInfo['id'];
			$name = $parentInfo['name'];
			$rank = $parentInfo['rank'];
			$wing = $parentInfo['wing'];
			$apt_name = $parentInfo['apt_name'];
			$battalion = $parentInfo['battalion'];
			$email = $parentInfo['email'];
			// echo '<pre/>';
			// print_r($parentInfo['name']);
			// die('LOL');
		}
		else{
			$user_id = '';
			$name = '';
			$rank = '';
			$wing = '';
			$apt_name = '';
			$battalion = '';
			$email = '';
		}
		
		
		
		$returnArray['user_id'] = $user_id;
		$returnArray['name'] = $name;
		$returnArray['rank'] = $rank;
		$returnArray['wing'] = $wing;
		$returnArray['apt_name'] = $apt_name;
		$returnArray['battalion'] = $battalion;
		$returnArray['email'] = $email;
		
		echo json_encode($returnArray);
		return;
		
		// $retrivedData = $this->Reports_model->getData();
    }
	
    public function getUserInfoAjax(){
		
		$id = $_POST['id'];
		
		if($id){
			
			$parentInfo = $this->Reports_model->getParentById($id);	
			// echo '<pre/>';
			// print_r($parentInfo);
			// die('LOL');
			$user_id = $parentInfo['id'];
			$name = $parentInfo['name'];
			$rank = $parentInfo['rank'];
			$wing = $parentInfo['wing'];
			$appointment = $parentInfo['appointment'];
			$battalion = $parentInfo['battalion'];
			$email = $parentInfo['email'];
			// echo '<pre/>';
			// print_r($parentInfo['name']);
			// die('LOL');
		}
		else{
			$user_id = $this->session->userdata('user_id');
			$name = $this->session->userdata('name');
			$rank = $this->session->userdata('rank');
			$wing = $this->session->userdata('wing');
			$appointment = $this->session->userdata('appointment');
			$battalion = $this->session->userdata('battalion');
			$email = $this->session->userdata('email');
		}
		
		
		
		$returnArray['user_id'] = $user_id;
		$returnArray['name'] = $name;
		$returnArray['rank'] = $rank;
		$returnArray['wing'] = $wing;
		$returnArray['appointment'] = $appointment;
		$returnArray['battalion'] = $battalion;
		$returnArray['email'] = $email;
		
		echo json_encode($returnArray);
		return;
		
		// $retrivedData = $this->Reports_model->getData();
    }
    
    public function ajax_self_user_data() {
        $battalion_id=$this->input->post('battalion_id');
        $role_id=$this->input->post('role_id');
        $user_id = $this->session->userdata('user_id');
        $data['self_user_data'] = $this->Reports_model->get_self_user_data($user_id);
        $this->load->view('Dashboard/load_self_user_data',$data);
    }
    public function requested_by_data() {
       $requested_by= $this->input->post('requested_by');
       $data['selected_user_info'] = $this->Reports_model->get_self_user_data($requested_by);
       $this->load->view('Dashboard/selected_requester_info', $data);
    }
    public function crime_wise_subcrime() {
       $crime_type= $this->input->post('crime_type');
       $data['sub_crime_type_data'] = $this->Reports_model->get_crime_wise_subcrime($crime_type);
       //var_dump($data['sub_crime_type_data']);die;
       $this->load->view('Dashboard/crime_wise_subcrime_info', $data);
    }	
    public function getUserInfo(){		
		$parent = $this->session->userdata('parent');
		
		if($_SESSION['role_type'] != 'Admin'){
			
			$parentInfo = $this->Reports_model->getParentData($parent);	
			$user_id = $parentInfo['id'];
			$name = $parentInfo['name'];
			$rank = $parentInfo['ranks_id'];
			$wing = $parentInfo['wing'];
			$apt_name = $parentInfo['apt_name'];
			$battalion = $parentInfo['battalion'];
			$email = $parentInfo['email'];
			

			// echo '<pre/>';
			// print_r($_SESSION['role_type']);
			// die('LOL');
		}
		else{
			$user_id = $this->session->userdata('user_id');
			$name = $this->session->userdata('name');
			$rank = $this->session->userdata('rank');
			$wing = $this->session->userdata('wing');
			$appointment = $this->session->userdata('appointment');
			$battalion = $this->session->userdata('battalion');
			$email = $this->session->userdata('email');
		}
		
		
		
		$returnArray['user_id'] = $user_id;
		$returnArray['name'] = $name;
		$returnArray['rank'] = $rank;
		$returnArray['wing'] = $wing;
		$returnArray['apt_name'] = $appointment;
		$returnArray['battalion'] = $battalion;
		$returnArray['email'] = $email;
		$returnArray['parent'] = $parent;
		
			// echo '<pre/>';
			// print_r($returnArray);
			// die('LOL');
			
		
		echo json_encode($returnArray);
		return;
		
		// $retrivedData = $this->Reports_model->getData();
    }
	
	public function detailedReport(){
		
		// $retrivedData = $this->Reports_model->getData();
		
		
	
        $data['user_list'] = $this->Reports_model->getdDetailedReportData();
        $data['main_content'] = 'Dashboard/detailedReport';
        $this->load->view('includes/template', $data);
		
		// $this->load->view('layout/header');
		// $this->load->view('Dashboard/requestLogs',array()); 
		// $this->load->view('layout/footer');				
    }
	
    public function requestLogs(){
		
		// $retrivedData = $this->Reports_model->getData();
		
		
	
        $data['user_list'] = $this->Reports_model->getRequestlogsData($_SESSION['user_id']);
        $data['main_content'] = 'Dashboard/requestLogs';
        $this->load->view('includes/template', $data);
		
		// $this->load->view('layout/header');
		// $this->load->view('Dashboard/requestLogs',array()); 
		// $this->load->view('layout/footer');				
    }
	
    public function myRequest(){
		
		// echo $_SESSION['user_id'];
		// die;
		// // $retrivedData['myRequest'] = $this->Reports_model->getData($_SESSION['user_id']);
		
		// // // echo '<pre/>';
		// // // print_r($retrivedData);
		// // // die('LOL');
		
        // // // $data['user_list'] = $this->settings_model->get_user();
        // // $data['main_content'] = 'Dashboard/myRequest';
        // // $this->load->view('includes/template', $retrivedData);				
    // // }
	
        $data['user_list'] = $this->Reports_model->getData($_SESSION['user_id']);
		
		
		// echo '<pre/>';
		// echo $this->db->last_query();
		// print_r($data);
		// die('LOL');
		
		
        $data['main_content'] = 'Dashboard/myRequest';
        $this->load->view('includes/template', $data);
    }
	
    public function activitiesRequestLogs(){

	
		
        $logsDataArray = $this->Reports_model->getActivitesLogData();
		
		foreach( $logsDataArray as $logsDatam)
		{
			$dataJson = $logsDatam['data'];
			$dataObj = json_decode($dataJson);
			$dataArray = (array)$dataObj;
			
			$dataCount = 0;
			foreach($dataArray as $key=>$value)
			{
				// $indexArray[$dataCount] = $key;
				$indexArray[$key] = '';
				$indexKeyArray[$key] = $key;
				// $valueArray[$dataCount] = $value;
				$dataCount++;
			}
		}
		
		
		foreach( $logsDataArray as $logsDatam)
		{
			$dataJson = $logsDatam['data'];
			$dataObj = json_decode($dataJson);
			$dataArray = (array)$dataObj;
			
			$dataCount = 0;
			foreach($dataArray as $key2=>$value2)
			{
				// $indexArray[$dataCount] = $key;
				$indexArray[$key2] = $value2;
				// $valueArray[$dataCount] = $value;
				$dataCount++;
			}
			// $check[] = $logsDatam;
			// $check[] = $indexArray;
			
			unset($logsDatam['data']); 
			unset($indexArray['user_type_id']); 
			
			$data['dataArray'][] = array_merge($indexArray,$logsDatam);
			$data['indexKeyArray'] = $indexKeyArray;
		}
	
		// echo '<pre/>';
		// print_r($data);
		// die;
			
			
		
        $data['main_content'] = 'Dashboard/activitiesRequestLogs';
        $this->load->view('includes/template', $data);
    }

	function udate($format, $utimestamp = null)	
	{
		$m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		return date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
	}
    function check_activitis() {
        $data['log_details'] = $this->Reports_model->get_log_data();
        $data['main_content'] = 'Dashboard/log_details_view';
        $this->load->view('includes/template', $data);
    }

    function save_request_info() {
        //var_dump($this->input->post());die;
        if($this->input->post('requested_by') == $this->session->userdata('user_id')){
            $self_user = 'Self User';
        }else{
            $self_user = '';
        }
        // $get_special_number = $this->db->where('contact_no',$this->input->post('msisdn'))->get('tbl_internal_hotlist')->row_array(); 
        $get_special_number = $this->db->where('reference_number',$this->input->post('msisdn'))->get('reference_details')->row_array(); 
        
        if($get_special_number['contact_no'] != NULL){
            $general_request = '0';
            $special_request = '1';
        }  else {
           $general_request = '1';
           $special_request = '0';
        }
       // var_dump($get_special_number);die;
        $save_user = array(
            'msisdn' => $this->input->post('msisdn'),
            'mno_operator' => $this->input->post('mno_operator'),
            'date_start' => $this->input->post('date_start'),
            'date_end' => $this->input->post('date_end'),            
            'requested_for' => $this->input->post('requested_by'),            
            'user_appointment' => $this->input->post('unit'),
            'user_designation' => $this->input->post('user_designation'),
            'user_placement' => $this->input->post('battalion'),
            'self_user' => $self_user,            
            'reason_crime_type' => $this->input->post('reason_crime_type'),
            'reason_crime_subtype' => $this->input->post('reason_crime_subtype'),           
            'remarks_reference' => $this->input->post('remarks_reference'),
            'request_status' => 'New',
            'general_type' => $general_request,
            'special' => $special_request,
            'is_approved' => 0,
            'battalions_id' => $this->session->userdata('battalion_id'),
            'cdr_voice_sms' => $this->input->post('cdr_voice_sms'),
            'gprs_data' => $this->input->post('gprs_data'),
            'info_fnf' => $this->input->post('info_fnf'),
            'info_subs' => $this->input->post('info_subs'),
            'info_mfs' => $this->input->post('info_mfs'),
            'info_scaned_pp' => $this->input->post('info_scaned_pp'),
            'recharge' => $this->input->post('recharge'),           
            'used_imei' => $this->input->post('used_imei'),
            'ipdr' => $this->input->post('ipdr'),
            'info_ussd' => $this->input->post('info_ussd'),
            'registration' => $this->input->post('registration'),
            'nid_pp' => $this->input->post('nid_pp'),
            'info_demographic' =>$this->input->post('info_demographic'),          
            'date_requested' => date('Y-m-d'),
            'requested_by' => $this->session->userdata('user_id')             
        );
	$save = $this->settings_model->save($save_user, 'tbl_req_mno_msisdn');
        
    }

}

?>