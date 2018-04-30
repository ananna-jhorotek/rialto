<?php
class Dashboard extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
    }
	
    public function index(){		
		$this->load->view('layout/header');
		$this->load->view('Dashboard/dashboard',array()); 
		$this->load->view('layout/footer');
    }

	
    public function indexs(){
		$this->load->view('layout/header');
		$this->load->view('Dashboard/dashboard',array()); 
		$this->load->view('layout/footer');
    }



}