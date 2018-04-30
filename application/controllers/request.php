<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    function __construct() {
        parent :: __construct();
        $this->load->model('request_model');
    }

    public function index() {
        $data['main_content'] = 'dashboard';
        $this->load->view('includes/template', $data);
		
    }
    function new_request_details() {
        $data['main_content'] = 'request/new_request_details';
        $this->load->view('includes/template', $data);
    }   
    function ajax_new_request_data() {   
        $target_number=$this->input->post('target_number');
        $request_by=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');    
        $data['search_datas'] = $this->request_model->get_end_user_new_request_data($target_number,$request_by,$crime_type,$start_date,$end_date);    
        $this->load->view('request/ajax_new_request_page',$data);
    }    
    function ajax_new_request_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('request/ajax_new_request_id_wise_details',$data);
    }
    function pending_request_details() {
        $data['main_content'] = 'request/pending_request_details';
        $this->load->view('includes/template', $data);
    }
     function ajax_pending_request_data() {         
        $target_number=$this->input->post('target_number');
        $request_date=$this->input->post('request_by');
        $crime_type=$this->input->post('crime_type');
        $start_date=$this->input->post('start_date');
        $end_date=$this->input->post('end_date');         
        $data['search_datas'] = $this->request_model->get_pending_request_data($target_number,$request_date,$crime_type,$start_date,$end_date);    
        $this->load->view('request/ajax_pending_request_page',$data);
    }
    function ajax_pending_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        $data['search_datas'] = $this->request_model->get_id_wise_request_data($transaction_id);    
        $this->load->view('request/ajax_pending_request_id_wise_details',$data);
    }
    function completed_request_details() {
        $data['main_content'] = 'request/completed_request_details';
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
        $this->load->view('request/ajax_completed_request_page',$data);
    }
    function ajax_completed_transaction_details() {    
        $transaction_id =$this->input->post('transaction_id');           
        //var_dump($end_date);die;
        $data['search_datas'] = $this->request_model->get_id_wise_completed_request_data($transaction_id);    
        //var_dump($data['search_datas']);die;
        $this->load->view('request/ajax_completed_request_id_wise_details',$data);
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
    
    
       
}
