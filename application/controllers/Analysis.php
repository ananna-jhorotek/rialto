<?php
class Analysis extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
    }
	
    public function index(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/Analysis_operator',array()); 
		$this->load->view('layout/footer');
    }

}