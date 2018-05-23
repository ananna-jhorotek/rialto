<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class RequestProvider extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model('request_model');
        $this->load->model('InfoRequest_model');
        $this->load->model('settings_model');
    }

    public function index() {
        $data['main_content'] = 'dashboard';
        $this->load->view('includes/template', $data);
		
    }

    public function requestProviderDashboard(){
        $data['main_content'] = 'RequestProvider/requestProviderDashboard';
        $this->load->view('includes/template', $data);
		
    }
	
    function new_request_details() {
        $data['main_content'] = 'RequestProvider/new_request_details';
        $this->load->view('includes/template', $data);
    }   

    function view_request_details() {
        $data['main_content'] = 'RequestProvider/view_request_details';
        $this->load->view('includes/template', $data);
    }
	
    function ajax_new_request_data(){
        //var_dump($this->input->post());die;
        $target_number=$this->input->post('target_number');
        $request_by=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');    
        $data['search_datas'] = $this->request_model->get_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date);    
        //var_dump($data['search_datas']);die;
        $this->load->view('RequestProvider/ajax_new_request_page',$data);
    }    
	
    function ajax_new_request_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
		// var_dump($transaction_id);die;
        $data['search_datas'] = $this->request_model->get_id_wise_new_request_data_sas($transaction_id);    
        // echo '<pre/>';
		// echo $this->db->last_query();
		// die;
		$dataArray['cdr_voice_sms'] = $data['search_datas']['cdr_voice_sms'];
		$dataArray['gprs_data'] = $data['search_datas']['gprs_data'];
		$dataArray['info_fnf'] = $data['search_datas']['info_fnf'];
		$dataArray['info_subs'] = $data['search_datas']['info_subs'];
		$dataArray['info_mfs'] = $data['search_datas']['info_mfs'];
		$dataArray['info_scaned_pp'] = $data['search_datas']['info_scaned_pp'];
		$dataArray['recharge'] = $data['search_datas']['recharge'];
		$dataArray['used_imei'] = $data['search_datas']['used_imei'];
		$dataArray['ipdr'] = $data['search_datas']['ipdr'];
		$dataArray['info_ussd'] = $data['search_datas']['info_ussd'];
		$dataArray['registration'] = $data['search_datas']['registration'];
		$dataArray['nid_pp'] = $data['search_datas']['nid_pp'];
		$dataArray['info_demographic'] = $data['search_datas']['info_demographic'];
		
		$data['search_datas']['requiredInfo'] = $dataArray;
		// $dataArray['info_ussd'] = $data['search_datas']['info_ussd'];
		// $dataArray['info_ussd'] = $data['search_datas']['info_ussd'];
		// $dataArray['info_ussd'] = $data['search_datas']['info_ussd'];
		
		// print_r($dataArray);
	
		// print_r($data['search_datas']);
			
		// die;
        $this->load->view('RequestProvider/ajax_new_request_id_wise_details',$data);
    }
	
    function pending_request_details() {
        $data['main_content'] = 'RequestProvider/pending_request_details';
        $this->load->view('includes/template', $data);
    }
	
    function updateReq() {
        
        $request_id  = $this->input->post('request_id'); 
        
/*############     For Document File ###################*/
        if (!empty($_FILES['document']['name'])) {
            $config['upload_path'] = './assets/uploads/document';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('document')) {
                $image_data = $this->upload->data();
                $branch_data['document'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        }
        else{
            $branch_data['document'] = '';
        }
        
 /* ###############  End Document ##########  */   
        
        
        /* ################  Start Image File Only   ########## */        
        if (!empty($_FILES['imageFile']['name'])) {
            $config['upload_path'] = './assets/uploads/images';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('imageFile')) {
                $image_data = $this->upload->data();
                $branch_data['imageFile'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        }
        else{
            $branch_data['imageFile'] = '';
        }
        /*  ############## End Image Fil only   ###############  */
        
        
        /* ################  PDF Image File Only   ########## */        
        if (!empty($_FILES['pdfFile']['name'])) {
            $config['upload_path'] = './assets/uploads/pdf';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('pdfFile')) {
                $image_data = $this->upload->data();
                $branch_data['pdfFile'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        }
        else{
            $branch_data['pdfFile'] = '';
        }     
        /*  ############## End PDF File only   ###############  */
        
         /* ################  Audio Image File Only   ########## */        
        if (!empty($_FILES['audioFile']['name'])) {
            $config['upload_path'] = './assets/uploads/audio';
            $config['allowed_types'] = '*';
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('audioFile')) {
                $image_data = $this->upload->data();
                $branch_data['audioFile'] = $image_data['file_name'];
            } else {
                echo $this->upload->display_errors();
                echo "Uploading Image problem...";
            }
        }    
        else{
            $branch_data['audioFile'] = '';
        }   
        /*  ############## End Audio File only   ###############  */
        
        $update_request_info = array(
            'request_status' => 'Completed',                        
            'document_name' => $branch_data['document'],
            'image_name' => $branch_data['imageFile'],           
            'pdf_name' => $branch_data['pdfFile'],   
            'audio_name' => $branch_data['audioFile'],
            'completed_date' => date('Y-m-d'),
            'completed_by' => $this->session->userdata('user_id')             
        );
        //var_dump($update_request_info);die;
	$this->request_model->update_request_info($update_request_info, $request_id);        
	

	$user = $this->request_model->getUserByReqId($request_id);
		
	$emailurl= "http://www.jhorotek.com/phpmailer/examples/rialto_req_confirm.php?email=$user->email";
	$emailurl = str_replace(" ", "+", $emailurl);
	$emailurl = file_get_contents($emailurl);
	
	redirect('RequestProvider/new_request_details');
        
    }
	
	

	
	public function upload($type, $trxId, $uploadArray)
	{
		$target_dir = "Provided_info/".$type."/".DATE('Ymd').'/'.$trxId.'/';
		$uniqueId = $this->udate();
		// $store_path = $target_dir . $uniqueId .'_';
		// // .basename($_FILES[$type]["name"])
		if(!is_dir($target_dir)) mkdir($target_dir, 0777, true);
		$target_file = $target_dir .$uniqueId .'_'. basename($_FILES[$type]["name"]);
		$uploadOk = 1;
		// Check if file already exists
		if (file_exists($target_file)) {
			// echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES[$type]["size"] > 500000) {
			// echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			// echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} 
		else
		{
			if (move_uploaded_file($_FILES[$type]["tmp_name"], $target_file)) {
				// echo "The file ". basename( $_FILES[$type]["name"]). " has been uploaded.";
			} else {
				// echo "Sorry, there was an error uploading your file.";
			}
		}
	}

	
	
    function ajax_pending_request_data() {         
        $target_number=$this->input->post('target_number');
        $request_date=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');         
        $data['search_datas'] = $this->request_model->get_pending_request_data($target_number,$request_date,$crime_type,$start_date,$end_date);    
        //var_dump($data['search_datas']);die;
        $this->load->view('RequestProvider/ajax_pending_request_page',$data);
    }
	
    function ajax_pending_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        //var_dump($data['search_datas']);die;
        $dataArray['cdr_voice_sms'] = $data['search_datas']['cdr_voice_sms'];
		$dataArray['gprs_data'] = $data['search_datas']['gprs_data'];
		$dataArray['info_fnf'] = $data['search_datas']['info_fnf'];
		$dataArray['info_subs'] = $data['search_datas']['info_subs'];
		$dataArray['info_mfs'] = $data['search_datas']['info_mfs'];
		$dataArray['info_scaned_pp'] = $data['search_datas']['info_scaned_pp'];
		$dataArray['recharge'] = $data['search_datas']['recharge'];
		$dataArray['used_imei'] = $data['search_datas']['used_imei'];
		$dataArray['ipdr'] = $data['search_datas']['ipdr'];
		$dataArray['info_ussd'] = $data['search_datas']['info_ussd'];
		$dataArray['registration'] = $data['search_datas']['registration'];
		$dataArray['nid_pp'] = $data['search_datas']['nid_pp'];
		$dataArray['info_demographic'] = $data['search_datas']['info_demographic'];
		
		$data['search_datas']['requiredInfo'] = $dataArray;
        $this->load->view('RequestProvider/ajax_pending_request_id_wise_details',$data);
    }
    function completed_request_details() {
        $data['main_content'] = 'RequestProvider/completed_request_details';
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
        $this->load->view('RequestProvider/ajax_completed_request_page',$data);
    }
    function ajax_completed_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        //var_dump($end_date);die;
        $data['search_datas'] = $this->request_model->get_request_providers_id_wise_completed_request_data($transaction_id);    
        //var_dump($data['search_datas']);die;
        $this->load->view('RequestProvider/ajax_completed_request_id_wise_details',$data);
    }
    
    public function autocomlete_target_number_search() {
        var_dump($this->input->post());die;
        if (isset($_GET['term'])) {
            $searched_name = $this->reports_model->get_auto_target_number_searched($_GET['term']);
            var_dump($searched_name);die;
            if (count($searched_name) > 0) {
                $p = array();
                foreach ($searched_name as $id):
                    array_push($p, $id['msisdn']);
                endforeach;
                echo json_encode($p);
            }
        }        
    }
	
	function udate($utimestamp = null)
	{
	    $m = explode(' ',microtime());    
		list($totalSeconds, $extraMilliseconds) = array($m[1], (int)round($m[0]*1000,3));
		 $txID = date("YmdHis", $totalSeconds) . sprintf('%03d',$extraMilliseconds) ;
		 $txID =  substr($txID,2,15);
		return $txID;
	}
    
    
       
}
