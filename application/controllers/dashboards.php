<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class dashboards extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
    }

    public function index() {
        
    } 
    
    public function super_admin_dashboard() {        
        $this->load->view('layout/header');
        $this->load->view('dashboard/super_admin_dashboard');
        $this->load->view('layout/footer');
    }
    public function admin_dashboard() {     
        $data['main_content'] = 'dashboard/admin_dashboard';
        $this->load->view('includes/template', $data);
        
//        $this->load->view('layout/header');
//        $this->load->view('dashboard/admin_dashboard');
//        $this->load->view('layout/footer');
    }
    
    public function request_provider_dashboard() {       
	$this->load->view('layout/header');
        $this->load->view('dashboard/request_provider_dashboard');
	$this->load->view('layout/footer');
    }
    
    public function info_request_dashboard() {        
	$this->load->view('layout/header');
        $this->load->view('dashboard/info_request_dashboard');
	$this->load->view('layout/footer');
    }
    public function operator_dashboard() {       
	$this->load->view('layout/header');
        $this->load->view('dashboard/operator_dashboard');
	$this->load->view('layout/footer');
    }
    public function common_dashboard() {       
	$this->load->view('layout/header');
        $this->load->view('dashboard/common_dashboard');
	$this->load->view('layout/footer');
    }
    
    

}
