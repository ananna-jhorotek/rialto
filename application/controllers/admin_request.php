<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_request extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model('request_model');
    }

    public function index() {
        $data['main_content'] = 'dashboard';
        $this->load->view('includes/template', $data);
		
    }
    function new_request_details() {
        $data['main_content'] = 'adminrequest/new_request_details';
        $this->load->view('includes/template', $data);
    }   
    function ajax_new_request_data() {   
        $target_number=$this->input->post('target_number');
        $request_by=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');    
        $data['search_datas'] = $this->request_model->get_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date);    
        $this->load->view('adminrequest/ajax_new_request_page',$data);
    }    
    function ajax_new_request_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('adminrequest/ajax_new_request_id_wise_details',$data);
    }
    function pending_request_details() {
        $data['main_content'] = 'adminrequest/pending_request_details';
        $this->load->view('includes/template', $data);
    }
     function ajax_pending_request_data() {         
        $target_number=$this->input->post('target_number');
        $request_date=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');         
        $data['search_datas'] = $this->request_model->get_pending_request_data($target_number,$request_date,$crime_type,$start_date,$end_date);    
        $this->load->view('adminrequest/ajax_pending_request_page',$data);
    }
    function ajax_pending_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('adminrequest/ajax_pending_request_id_wise_details',$data);
    }
    function completed_request_details() {
        $data['main_content'] = 'adminrequest/completed_request_details';
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
        $this->load->view('adminrequest/ajax_completed_request_page',$data);
    }
    function ajax_completed_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        //var_dump($end_date);die;
        $data['search_datas'] = $this->request_model->get_id_wise_completed_request_data($transaction_id);    
        //var_dump($data['search_datas']);die;
        $this->load->view('adminrequest/ajax_completed_request_id_wise_details',$data);
    }    
    function special_request_details() {
        $data['main_content'] = 'adminrequest/special_request_details';
        $this->load->view('includes/template', $data);
    }   
    function ajax_special_request_data() {   
        $target_number=$this->input->post('target_number');
        $request_by=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');    
        $data['search_datas'] = $this->request_model->get_special_request_data($target_number,$request_by,$crime_type,$start_date,$end_date);    
        $this->load->view('adminrequest/ajax_special_request_page',$data);
    }    
    function ajax_special_request_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('adminrequest/ajax_new_request_id_wise_details',$data);
    }
    function approve_request($request_id) {
        $update_request_info = array(         
            'is_approved' => 1,
            'approved_date' => date('Y-m-d H:i:s'),
            'approved_by' => $this->session->userdata('user_id')             
        );
        $this->request_model->update_request_info($update_request_info, $request_id); 
        redirect('admin/new_request_details');
    }
    
       
}
