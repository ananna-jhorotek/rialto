<?php
class Login extends CI_Controller{
	
    function __construct()
    {		
        parent::__construct();
		// session_start();
        $this->load->model('Login_m');
        $this->load->model('Reports_model');
    }
	
    public function index(){		
        $this->load->view('admin/login');
    }

    public function post_login()
	{
        $this->load->library('form_validation');
        if($this->form_validation->run('login_form') == FALSE)
		{
            $this->load->view('admin/login');
        }
		else
		{			
			$email=$this->input->post('EmailInput');
			$password=$this->input->post('PasswordInput');

			$validUser = $this->Login_m->login_valid($email,md5($password));
			

            if($validUser){
				
				// echo '<pre/>';
				// print_r($validUser);
				// die;
				
				
                $this->session->set_userdata('user_id', $validUser['id']);
                $this->session->set_userdata('name', $validUser['name']);
                $this->session->set_userdata('rank', $validUser['rank']);
                $this->session->set_userdata('wing', $validUser['wing']);
                $this->session->set_userdata('apt_name', $validUser['apt_name']);
                $this->session->set_userdata('battalion', $validUser['battalion']);
                $this->session->set_userdata('email', $validUser['email']);
                $this->session->set_userdata('parent', $validUser['parent']);
				
				if($validUser['parent'] != 0)
				{
					$parentInfo = $this->Reports_model->getParentData($validUser['parent']);	
					$this->session->set_userdata('parentbattalion', $parentInfo['battalion']);
				}
				else
				{
					$this->session->set_userdata('parentbattalion', $validUser['battalion']);
				}
				
				
				if($validUser['accesslevel'] == '2')
				{
					redirect('Mfs/dashboard');
				}
				

                $this->session->set_flashdata('success_msg','Login Success');
                return redirect('PlottedCellsite/index');

            }
			else
			{
				$this->session->set_flashdata('error_msg','User name or Password did not matched!');
                $this->load->view('admin/login');
            }

        }

    }



}