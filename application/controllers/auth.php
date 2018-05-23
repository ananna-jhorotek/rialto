<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('login_model'); 
        $this->load->model('Reports_model'); 
    }

    function index() {
        $this->load->view('login_page');
    }
	
    function sign_in() {
		$this->load->library('form_validation');
		if($this->form_validation->run('login_page') == FALSE)
		{
            $this->load->view('login_page');
        }
		else
		{
	
        //var_dump($this->input->post());die;        
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $check_user = $this->login_model->user_check($username,$password);
//		 echo '<pre/>';
//		 echo $this->db->last_query();
//         print_r($check_user);
//		 die;
//        
		if($check_user == NULL){
            $this->session->set_flashdata('error_msg', 'Wrong username or password !!');
            $this->load->view('login_page');
        }  else {
			$this->session->set_userdata('user_id', $check_user['id']);
			$this->session->set_userdata('name', $check_user['name']);
			$this->session->set_userdata('rank', $check_user['rank']);
			$this->session->set_userdata('wing', $check_user['wing']);
			$this->session->set_userdata('appointment', $check_user['appointment']);
			$this->session->set_userdata('battalion_id', $check_user['battalions_id']);                        
			$this->session->set_userdata('battalion', $check_user['battalion']);
			$this->session->set_userdata('rt_officer', $check_user['rt_officers_id']);
			$this->session->set_userdata('email', $check_user['email']);
			$this->session->set_userdata('parent', $check_user['parent']);
			$this->session->set_userdata('role_type', $check_user['role_name']);
			$this->session->set_userdata('role_id', $check_user['roleid']);
			
			if($check_user['parent'] != 0)
			{
				$parentInfo = $this->Reports_model->getParentData($check_user['parent']);
				
				// echo '<pre/>';
				// echo $this->db->last_query();
				// print_r($parentInfo);
				// die;
				$this->session->set_userdata('parentbattalion', $parentInfo['battalions_id']);
			}
			else
			{
				// echo $this->db->last_query();
				// print_r($check_user['battalions_id']);
				// die(':::::');
				$this->session->set_userdata('parentbattalion', $check_user['battalions_id']);
			}

            $newdata = array(
                                'email' => $check_user['email'],
                                'user_id' => $check_user['id'],
                                'logged_in' => TRUE,
                                'user_type' => $check_user['user_type'],
                                'role_type' => $check_user['role_name'],
                                'user_name' => $check_user['name'],
                                'name' => $check_user['name'],
                                'language'=>'bangla',
                           );
                           // print_r($newdata);die;
            $this->session->set_userdata($newdata);
            if ($newdata['role_type'] == 'Super Admin') {            
                redirect('dashboards/super_admin_dashboard');               
            }else if ($newdata['role_type'] == 'Admin') {                
                redirect('dashboards/admin_dashboard');               
            }if ($newdata['role_type'] == 'END USER - INFO REQUEST') {			
                redirect('dashboards/info_request_dashboard');               
            }else if ($newdata['role_type'] == 'SUPER IMMC SUPPORT TEAM') {                
                redirect('dashboards/super_request_provider_dashboard');               
            }else if ($newdata['role_type'] == 'IMMC SUPPORT TEAM') {                
                redirect('dashboards/request_provider_dashboard');               
            }else{
                redirect('dashboards/common_dashboard');              
            }           
        }
		}    
        
    }  
  

    function logout() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'Thank you for using the system !');
        $this->index();
    }

    function register() {
        $this->load->view('register');
    }

}
